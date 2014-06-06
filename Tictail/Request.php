<?php
/**
 * Description of Request
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		11.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail;

use Exception;
use Tictail\API\CommunicationAbstract;
use Tictail\API\Curl;
use Tictail\Models\Request\Base;
use Tictail\Models\Response\Error;
use Tictail\Services\TictailException;
use Tictail\Services\ResponseHandler;


class Request 
{

	/**
	 * @var \Tictail\API\CommunicationAbstract|Curl
	 */
	private $_connectionClass;

	/**
	 * @var array
	 */
	private $_lastResponse;

	/**
	 * @var array
	 */
	private $_lastRequest;

	/**
	 * Creates a Request object instance
	 * @param string|null $privateKey
	 */
	public function __construct($accessToken)
	{
		if(!is_null($accessToken)){
			$this->setConnectionClass(new Curl($accessToken));
		}
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
	 * Sends a creation request using the provided model
	 * @param \Tictail\Models\Request\Base $model
	 * @throws TictailException
	 * @return \Tictail\Models\Response\Base
	 */
	public function create($model)
	{
		return $this->_request($model, __FUNCTION__);
	}

	/**
	 * Sends an update request using the provided model
	 * @param \Tictail\Models\Request\Base $model
	 * @throws TictailException
	 * @return \Tictail\Models\Response\Base
	 */
	public function update($model)
	{
		return $this->_request($model, __FUNCTION__);
	}

	/**
	 * Sends a delete request using the provided model
	 * @param \Tictail\Models\Request\Base $model
	 * @throws TictailException
	 * @return \Tictail\Models\Response\Base
	 */
	public function delete($model)
	{
		return $this->_request($model, __FUNCTION__);
	}

	/**
	 * Sends a getAll request using the provided model
	 * @param \Tictail\Models\Request\Base $model
	 * @throws TictailException
	 * @return array
	 */
	public function getAll($model)
	{
		return $this->_request($model, __FUNCTION__);
	}

	/**
	 * Sends a getOne request using the provided model
	 * @param \Tictail\Models\Request\Base $model
	 * @throws TictailException
	 * @return \Tictail\Models\Response\Base
	 */
	public function getOne($model)
	{
		return $this->_request($model, __FUNCTION__);
	}

	/**
	 * Returns the response of the last request
	 * @return array
	 */
	public function getLastResponse()
	{
		return $this->_lastResponse;
	}

	/**
	 * Returns the parameter which were used for the last request
	 * @return array
	 */
	public function getLastRequest()
	{
		return $this->_lastRequest;
	}

	/**
	 * Returns the LastResponse as StdClassObject. Returns false if no request was made earlier.
	 * 
	 * @return false | stdClass
	 */
	public function getJSONObject(){
		$result = false;
		$responseHandler = new ResponseHandler();
		if(is_array($this->_lastResponse)){
			$result = $responseHandler->arrayToObject($this->_lastResponse['body']);
		}
		return $result;
	}

	/**
	 *
	 * @param string $method
	 * @return string
	 */
	private function _getHTTPMethod($method)
	{
		$httpMethod = 'POST';
		switch ($method) {
			case 'create':
				$httpMethod = 'POST';
				break;
			case 'update':
				$httpMethod = 'PUT';
				break;
			case 'delete':
				$httpMethod = 'DELETE';
				break;
			case 'getAll':
			case 'getOne':
				$httpMethod = 'GET';
				break;
		}
		return $httpMethod;
	}

	/**
	 * Sends a request based on the provided request model and according to the argumented method
	 * @param \Tictail\Models\Request\Base $model
	 * @param string $method (create, update, delete, getAll, getOne)
	 * @throws TictailException
	 * @return \Tictail\Models\Response\Base|\Tictail\Models\Response\Error
	 */
	private function _request(Base $model, $method)
	{
		if(!is_a($this->_connectionClass, '\Tictail\API\CommunicationAbstract')){
			throw new TictailException(null, 'The connenction class is missing!');
		}
		$httpMethod = $this->_getHTTPMethod($method);
		$parameter = $model->parameterize($method);
		$serviceResource = $model->getServiceResource();
		
		try {
			$this->_lastRequest = $parameter;
			$response = $this->_connectionClass->requestApi($serviceResource, $parameter, $httpMethod);
			$this->_lastResponse = $response;
			$responseHandler = new ResponseHandler();
			if ($method === 'getAll') {
				$convertedResponse = $responseHandler->convertResponseToArray($response, get_class($model));
			} else {
				$convertedResponse = $responseHandler->convertResponse($response, get_class($model));
			}
		} catch (Exception $e) {
			$errorModel = new Error();
			$convertedResponse = $errorModel->setErrorMessage($e->getMessage());
		}

		if (is_a($convertedResponse, '\Tictail\Models\Response\Error')) {
			throw new TictailException(
				$convertedResponse->getHttpStatusCode(), $convertedResponse->getErrorMessage(), $convertedResponse->getParams()
			);
		}

		return $convertedResponse;
	}
}
