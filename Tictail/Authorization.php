<?php

/**
 * Description of Authorization
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		14.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail;

use Tictail\API\CommunicationAbstract;
use Tictail\API\Curl;
use Tictail\Services\TictailException;

class Authorization 
{
	/**
	 * @var \Tictail\API\CommunicationAbstract|Curl
	 */
	private $_connectionClass;
	
	private $_code;
	private $_clientId;	
	private $_clientSecret;


	private $_accessToken;
	private $_storeData;
	private $_storeId;
	
	public $response = '';
	
	/**
	 * 
	 * @param string $clientId
	 * @param string $clientSecret
	 * @param string $code
	 */
	public function __construct($clientId, $clientSecret, $code) 
	{
		$this->_code = $code;
		$this->_clientId = $clientId;
		$this->_clientSecret; 
		
		$this->setConnectionClass(new Curl());
		
		$this->response = $this->_authorize($clientId, $clientSecret, $code);
	}
	
	/**
	 * @param \Tictail\API\CommunicationAbstract|Curl $communicationClass
	 * @return $this
	 */
	public function setConnectionClass(CommunicationAbstract $communicationClass = null)
	{
		$this->_connectionClass = $communicationClass;
		return $this;
	}	
	
	/**
	 * Returns the accessToken
	 * @return string
	 */
	public function getAccessToken() 
	{
		return $this->_accessToken;
	}
	
	/**
	 * Returns the client Id
	 * @return string
	 */
	public function getClientId()
	{
		return $this->_clientId;
	}
	
	/**
	 * Sets the client Id
	 * @param string $clientId
	 * @return \Tictail\Authorization
	 */
	public function setClientId($clientId)
	{
		$this->_clientId = $clientId;
		return $this;
	}
	
	/**
	 * Returns the client secret
	 * @return string
	 */
	public function getClientSecret()
	{
		return $this->_clientSecret;
	}
	
	/**
	 * Sets the Client Secret
	 * @param string $clientSecret
	 * @return \Tictail\Authorization
	 */
	public function setClientSecret($clientSecret) 
	{
		$this->_clientSecret = $clientSecret;
		return $this;
	}
	
	/**
	 * Returns the store Id
	 * @return string
	 */
	public function getStoreId()
	{
		return $this->_storeId;
	}
	
	/**
	 * Sends an authorization request and returns the response
	 * @param string $clientId
	 * @param string $clientSecret
	 * @param string $code
	 * @return array Response with header and body 
	 * @throws TictailException
	 */
	private function _authorize($clientId, $clientSecret, $code)
	{
		if(!is_a($this->_connectionClass, '\Tictail\API\CommunicationAbstract')){
			throw new TictailException(null, 'The connenction class is missing!');
		}

		$response = $this->_connectionClass->authorize($clientId, $clientSecret, $code);
		$httpCode = $response['header']['status'];

		if($httpCode === 200){
			$this->_accessToken = $response['body']['access_token']; 
			$this->_storeData = $response['body']['store'];
			$this->_storeId = $this->_storeData['id'];
		} else {
			$msg = $httpCode === 400 ? 'Authorization: Bad request' : $response['body']['error'];
			throw new TictailException($httpCode, $msg);
		}
		
		return $response;
	}
}
