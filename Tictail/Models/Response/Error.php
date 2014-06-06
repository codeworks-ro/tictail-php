<?php
/**
 * Description of Error
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		11.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Response;

class Error
{

	/**
	 * @var string
	 */
	private $_errorMessage;
	/**
	 * @var int
	 */
	private $_responseCode;

	/**
	 * @var int
	 */
	private $_httpStatusCode;
	
	/**
	 * @var array
	 */
	private $_params;

	/**
	 * Returns the error message stored in the model
	 * @return string
	 */
	public function getErrorMessage()
	{
		return $this->_errorMessage;
	}

	/**
	 * Sets the error message stored in this model
	 * @param string $errorMessage
	 * @return \Tictail\Models\Response\Error
	 */
	public function setErrorMessage($errorMessage)
	{
		$this->_errorMessage = $errorMessage;
		return $this;
	}

	/**
	 * Returns the response code
	 * @return int
	 */
	public function getResponseCode()
	{
		return $this->_responseCode;
	}

	/**
	 * Sets the response code
	 * @param int $responseCode
	 * @return \Tictail\Models\Response\Error
	 */
	public function setResponseCode($responseCode)
	{
		$this->_responseCode = $responseCode;
		return $this;
	}

	/**
	 * Returns the status code
	 * @return int
	 */
	public function getHttpStatusCode()
	{
		return $this->_httpStatusCode;
	}

	/**
	 * Sets the status code
	 * @param int $httpStatusCode
	 * @return \Tictail\Models\Response\Error
	 */
	public function setHttpStatusCode($httpStatusCode)
	{
		$this->_httpStatusCode = $httpStatusCode;
		return $this;
	}

	/**
	 * Returns the params array
	 * @return array
	 */
	public function getParams()
	{
		return $this->_params;
	}

	/**
	 * Sets the parrams array
	 * @param array $params
	 * @return \Tictail\Models\Response\Error
	 */
	public function setParams($params)
	{
		$this->_params = $params;
		return $this;
	}	
	
}