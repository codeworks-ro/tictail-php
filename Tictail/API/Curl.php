<?php

/**
 * Description of Curl
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		11.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\API;

use Exception;

/**
 * It's incorrect to test for the function itself. Since we know exactly when the
 * json_decode function was introduced. So we test the PHP version instead.
 */
if (version_compare(PHP_VERSION, '5.2.0', '<')) {
	throw new Exception('Your PHP version is too old: install the PECL JSON extension');
} else if (!function_exists('json_decode')) {
	throw new Exception('The JSON extension is missing.');
}

/**
 * Check if the cURL extension is enabled.
 */
if (!extension_loaded('curl')) {
	throw new Exception('Please install the PHP cURL extension');
}

/**
 * Curl
 */
class Curl extends CommunicationAbstract
{

	private $_apiUrl = 'https://api.tictail.com/v1/';
	private $_authURL = 'https://tictail.com/oauth/token';
	private $_extraOptions;

	private $_accessToken;

	private $_userAgent = 'CodeWorks-Tictail-php/1.00'; 

	/**
	 * cURL HTTP client constructor
	 *
	 * @param string $apiKey
	 * @param string $apiEndpoint
	 * @param array $extracURL
	 *   Extra cURL options. The array is keyed by the name of the cURL
	 *   options.
	 */
	public function __construct($accessToken = null, $extracURL = array())
	{
		if (!empty($accessToken)){
			$this->_accessToken = $accessToken;
		}		
		/**
		 * Proxy support. The proxy can be SOCKS5 or HTTP.
		 * Also the connection could be tunneled through.
		 */
		if (!empty($extracURL)) {
			$this->_extraOptions;
		}
	}

	/**
	 * Perform HTTP request to REST endpoint
	 *
	 * @param string $action
	 * @param array $params
	 * @param string $method
	 * @return array
	 */
	public function requestApi($action = '', $params = array(), $method = 'POST')
	{
		$curlOpts = array(
			CURLOPT_URL => $this->_apiUrl . $action,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_CUSTOMREQUEST => $method,
			CURLOPT_USERAGENT => $this->_userAgent,
			CURLOPT_SSL_VERIFYPEER => false,

			CURLOPT_HTTPHEADER => array('Authorization: Bearer ' . $this->_accessToken), 
		);

		// Add extra options to cURL if defined.
		if (!empty($this->_extraOptions)) {
			$curlOpts += $this->_extraOptions;
		}

		if ('GET' === $method) {
			if (0 !== count($params)) {
				$curlOpts[CURLOPT_URL] .= false === strpos($curlOpts[CURLOPT_URL], '?') ? '?' : '&';
				$curlOpts[CURLOPT_URL] .= http_build_query($params, null, '&');
			}
		} else if ('POST' === $method) {
			$curlOpts[CURLOPT_HTTPHEADER] []= "Content-Type: application/json";
			$curlOpts[CURLOPT_POSTFIELDS] = json_encode($params);
		} else {
			$curlOpts[CURLOPT_URL] .= http_build_query($params, null, '&');
		}

		$curl = curl_init();
		curl_setopt_array($curl, $curlOpts);
		$responseBody = $this->_curlExec($curl);
		$responseInfo = $this->_curlInfo($curl);

		if ($responseBody === false) {
			$responseBody = array('error' => $this->_curlError($curl));
		}
		curl_close($curl);

		if ('application/json' === $responseInfo['content_type']) {
			$responseBody = json_decode($responseBody, true);
		}

		return array(
			'header' => array(
				'status' => $responseInfo['http_code'],
				'reason' => null,
			),
			'body' => $responseBody
		);
	}


	/**
	 * Perform authorization
	 * 
	 * @param string $code 
	 * @param string $clientId 
	 * @param string $clientSecret
	 * @return array Response of authorization
	 */	
	public function authorize($clientId, $clientSecret, $code) 
	{
		$params = array(
			'client_id' => $clientId, 
			'client_secret' => $clientSecret, 
			'code' => $code, 
			'grant_type' => 'authorization_code'
		);

		$curlOpts = array(
			CURLOPT_URL => $this->_authURL,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_USERAGENT => $this->_userAgent,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => $params,

			CURLOPT_SSL_VERIFYPEER => false, 
			CURLINFO_HEADER_OUT => true,
		);

		$curl = curl_init();
		curl_setopt_array($curl, $curlOpts);
		$responseBody = $this->_curlExec($curl);
		$responseInfo = $this->_curlInfo($curl);

		if ($responseBody === false) {
			$responseBody = array('error' => $this->_curlError($curl));
		}
		curl_close($curl);

		if (false !== strpos($responseInfo['content_type'], 'application/json')) {
			$responseBody = json_decode($responseBody, true);
		}

		return array(
			'header' => array(
				'status' => $responseInfo['http_code'],
				'reason' => null,
			),			
			'body' => $responseBody, 
		);
	}



	/**
	 * Wrapps the curlExec function call
	 * @param cURL handle success $curl
	 * @return mixed
	 */
	protected function _curlExec($curl)
	{
		return curl_exec($curl);
	}

	/**
	 * Wrapps the curlInfo function call
	 * @param cURL handle success $curl
	 * @return mixed
	 */
	protected function _curlInfo($curl)
	{
		return curl_getinfo($curl);
	}

	/**
	 * Wrapps the curlError function call
	 * @param cURL handle success $curl
	 * @return mixed
	 */
	protected function _curlError($curl)
	{
		return curl_error($curl);
	}
}