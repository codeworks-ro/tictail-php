<?php
/**
 * Description of TictailException
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		11.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Services;

/**
 * TictailException
 */
class TictailException extends \Exception
{
	private $_httpStatusCode;
	private $_errorMessage;
	private $_errorParams;

	/**
	 *
	 * @param int $code
	 * @param string $message
	 * @param array $errorParams
	 */
	public function __construct($code = null, $message = null, $errorParams = array())
	{
		parent::__construct($message, $code, null);
		$this->_httpStatusCode = $code;
		$this->_errorMessage = $message;
		$this->_errorParams = $errorParams;
	}

	/**
	 * @return string
	 */
	public function getErrorMessage()
	{
		return $this->_errorMessage;
	}

	/**
	 * @return string
	 */
	public function getStatusCode()
	{
		return $this->_httpStatusCode;
	}

	/**
	 * @return array
	 */
	public function getErrorParams()
	{
		return $this->_errorParams;
	}

}
