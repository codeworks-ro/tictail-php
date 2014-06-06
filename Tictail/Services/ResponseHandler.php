<?php
/**
 * Description of ResponseHandler
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		11.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Services;

use Tictail\Models\Response as Models;
use Tictail\Models\Response\Error;

class ResponseHandler
{

//	private $_errorCodes = array(
//		//TODO: maybe for Tictail api v2
//	);

   /**
	 * Converts a response to a model
	 * @param array $response
	 * @param string $serviceResource
	 * @return Models\Response\(Base|Error)
	 */
	public function convertResponse($response, $resourceClass)
	{
		$resourceName = str_replace('Tictail\\Models\\Request\\', '', $resourceClass);
		$resultValue = null;
		if ($this->validateResponse($response)) {
			$resultValue = $this->_convertResponseToModel($response['body'], $resourceName);
		} else {
			$resultValue = $this->_convertErrorToModel($response);
		}
		return $resultValue;
	}
	
	/**
	 * Converts response to an array of models
	 * @param array $response
	 * @param string $resourceClass
	 * @return mixed array of Models\Response\Base or instance of Models\Response\Error
	 */
	public function convertResponseToArray($response, $resourceClass)
	{
		$resourceName = str_replace('Tictail\\Models\\Request\\', '', $resourceClass);
		if (!$this->validateResponse($response)) {
			return $this->_convertErrorToModel($response);
		}		
		if (!is_array($response['body'])) {
			return $response;
		}
		return $this->_handleRecursive($response['body'], $resourceName);
	}
	
	
	/**
	 * Creates an object from a response array based on the call-context
	 * @param array $response Response from any Request
	 * @param string $resourceName
	 * @return Models\Base
	 */
	private function _convertResponseToModel($response, $resourceName)
	{
		if (!is_array($response) || empty($response)) {
			return $response;
		}

		$model = null;
		switch (strtolower($resourceName)) {
			case 'store':
				$model = $this->_createStore($response);
				break;
			case 'card':
				$model = $this->_createCard($response);
				break;
			case 'customer':
				$model = $this->_createCustomer($response);
				break;
			case 'product':
				$model = $this->_createProduct($response);
				break;
			case 'variation':
				$model = $this->_createVariation($response);
				break;
			case 'image':
				$model = $this->_createImage($response);
				break;
			case 'follower':
				$model = $this->_createFollower($response);
				break;
			case 'order':
				$model = $this->_createOrder($response);
				break;
			case 'transaction':
				$model = $this->_createTransaction($response);
				break;
			case 'receiver':
				$model = $this->_createReceiver($response);
				break;
			case 'fullfilment':
				$model = $this->_createFullfilment($response);
				break;
			case 'item':
				$model = $this->_createItem($response);
				break;
			case 'shipping_alternative':
				$model = $this->_createShippingAlternative($response);
				break;
			case 'vat':
				$model = $this->_createVat($response);
				break;
			case 'discount':
				$model = $this->_createDiscount($response);
				break;
			case 'me':
				$model = $this->_createMe($response);
				break;
			case 'theme':
				$model = $this->_createTheme($response);
				break;
		}

		return $model;
	}

	/**
	 * Creates and fills a storemodel
	 *
	 * @param array $response
	 * @return \Tictail\Models\Response\Client
	 */
	private function _createStore($response) 
	{
		$model = new Models\Store();
		$model->setId($response['id']);
		$model->setName($response['name']);
		$model->setCurrency($response['currency']);
		$model->setLanguage($response['language']);
		$model->setUrl($response['url']);
		$model->setDashboardUrl($response['dashboard_url']);
		$model->setStorekeeperEmail($response['storekeeper_email']);
		$model->setSandbox($response['sandbox']);
		$model->setCreatedAt($response['created_at']);
		$model->setModifiedAt($response['modified_at']);
		$model->setFollowers($response['followers']);
		$model->setContactEmail($response['contact_email']);
		return $model;
	}

	/**
	 * Creates and fills a cardmodel
	 *
	 * @param array $response
	 * @return \Tictail\Models\Response\Card
	 */
	private function _createCard($response)
	{
		$model = new Models\Card();
		$model->setId($response['id']);
		$model->setTitle($response['title']);
		$model->setCardType($response['card_type']);
		$model->setAction($response['action']);
		$model->setContent($response['content']);
		$model->setCreatedAt($response['created_at']);
		$model->setModifiedAt($response['modified_at']);
		return $model;
	}

	/**
	 * Creates and fills a customermodel
	 *
	 * @param array $response
	 * @return \Tictail\Models\Response\Customer
	 */

	private function _createCustomer($response)
	{
		$model = new Models\Customer();
		$model->setId($response['id']);
		$model->setEmail($response['email']);
		$model->setName($response['name']);
		$model->setCountry($response['country']);
		$model->setLanguage($response['language']);	
		return $model;
	}

	/**
	 * Creates and fills a productmodel
	 *
	 * @param array $response
	 * @return \Tictail\Models\Response\Product
	 */
	private function _createProduct($response)
	{
		$model = new Models\Product();
		$model->setId($response['id'])
				->setTitle($response['title'])	
				->setDescription($response['description'])
				->setStatus($response['status'])
				->setPrice($response['price'])
				->setSlug($response['slug'])
				->setUnlimited($response['unlimited'])
				->setQuantity($response['quantity']);	
		
		$model->setVariations($this->_handleRecursive($response['variations'], 'variation'));
		$model->setImages($this->_handleRecursive($response['images'], 'image'));
		
		$model->setCreatedAt($response['created_at']);
		$model->setModifiedAt($response['modified_at']);				
		return $model;
	}

	/**
	 * Creates and fills product variation model
	 * @param array $response
	 * @return \Tictail\Models\Response\Variation
	 */
	private function _createVariation($response)
	{
		$model = new Models\Variation();
		$model->setId($response['id']);
		$model->setTitle($response['title']);
		$model->setUnlimited($response['unlimited']);
		$model->setQuantity($response['quantity']);
		$model->setCreatedAt($response['created_at']);
		$model->setModifiedAt($response['modified_at']);			
		return $model;
	}

	/**
	 * Creates and fills product image model
	 * @param array $response
	 * @return \Tictail\Models\Response\Image
	 */
	private function _createImage($response)
	{
		$model = new Models\Image();
		$model->setId($response['id'])
				->setOriginalWidth($response['original_width'])
				->setOriginalHeight($response['original_height'])
				->setSizes($response['sizes'])
				->setCreatedAt($response['created_at'])
				->setModifiedAt($response['modified_at']);	
		return $model;
	}

	/**
	 * Creates and fills a follower model
	 *
	 * @param array $response
	 * @return \Tictail\Models\Response\Follower
	 */
	private function _createFollower($response)
	{
		$model = new Models\Follower();
		$model->setId($response['id']);
		$model->setEmail($response['email']);
		$model->setCreatedAt($response['created_at']);
		$model->setModifiedAt($response['modified_at']);	
		return $model;
	}

	/**
	 * Creates and fills a order model
	 *
	 * @param array $response
	 * @return \Tictail\Models\Response\Order
	 */
	private function _createOrder($response)
	{
		$model = new Models\Order();
		$model->setId($response['id']);
		$model->setNumber($response['number']);
		$model->setPrice($response['price']);
		$model->setCurrency($response['currency']);
		$model->setNote($response['note']);		
		$model->setTransaction($this->_handleRecursive($response['transaction'], 'transaction'));
		$model->setFullfilment($this->_handleRecursive($response['fullfilment'], 'fullfilment'));		
		$model->setCustomer($this->_handleRecursive($response['customer'], 'customer'));
		$model->setVat($this->_handleRecursive($response['vat'], 'vat'));
		$model->setItems($response['items']);
		$model->setDiscounts($this->_handleRecursive($response['discounts'], 'discount'));
		$model->setShippingAlternative($this->_handleRecursive($response['shipping_alternative'], 'shipping_alternative'));		
		$model->setCreatedAt($response['created_at']);
		$model->setModifiedAt($response['modified_at']);	
		return $model;
	}

	/**
	 * Creates and fills an order transaction model
	 * @param array $response
	 * @return \Tictail\Models\Response\Transaction
	 */	
	private function _createTransaction($response)
	{
		if (!is_array($response) || empty($response)) {
			return $response;
		}

		$model = new Models\Transaction();
		$model->setStatus($response['status']);
		$model->setProcessor($response['processor']);
		$model->setReference($response['reference']);
		$model->setPaidAt($response['paid_at']);
		return $model;
	}

	/**
	 * Creates and fills order fullfilment model
	 * @param array $response
	 * @return \Tictail\Models\Response\Fullfilment|null
	 */
	private function _createFullfilment($response)
	{
		if (!is_array($response) || empty($response)) {
			return $response;
		}

		$model = new Models\Fullfilment();
		$model->setStatus($response['status']);
		$model->setReceiver($this->_createReceiver($response['receiver']));
		$model->setTrackingNumber($response['tracking_number']);
		$model->setProvider($response['provider']);
		$model->setShippedAt($response['shipped_at']);
		$model->setPrice($response['price']);
		$model->setCurrency($response['currency']);
		$model->setVat($this->_createVat($response['vat']));
		return $model;
	}
	
	/**
	 * Creates and fills order receiver model
	 * @param array $response
	 * @return \Tictail\Models\Response\Receiver
	 */
	private function _createReceiver($response)
	{
		if (!is_array($response) || empty($response)) {
			return $response;
		}

		$model = new Models\Receiver();
		$model->setName($response['name']);
		$model->setCity($response['city']);
		$model->setCountry($response['country']);
		$model->setPhone($response['phone']);
		$model->setState($response['state']);
		$model->setStreet($response['street']);
		$model->setZip($response['zip']);
		return $model;		
	}
	
	/**
	 * TODO
	 * Creates and fills order item model
	 * @param array $response
	 * @return \Tictail\Models\Response\OrderItem|null
	 */
	private function _createItem($response)
	{
		if (!is_array($response) || empty($response)) {
			return $response;
		}
		
		$model = new Models\OrderItem();
		$model->setPrice($response['price']);
		$model->setCurrency($response['currency']);
		$model->setQuantity($response['quantity']);
		$model->setProduct($this->_handleRecursive($response['product'], 'product'));
		return $model;	
	}

	/**
	 * Creates and fills order discount model
	 * @param array $response
	 * @return \Tictail\Models\Response\Discount|null
	 */
	private function _createDiscount($response)
	{
		if (!is_array($response) || empty($response)) {
			return $response;
		}

		$model = new Models\Discount();
		$model->setId($response['id']);
		$model->setTitle($response['title']);
		$model->setStatus($response['status']);
		$model->setType($response['type']);
		$model->setAmount($response['amount']);
		$model->setMinimumPrice($response['minimum_price']);
		$model->setStorewide($response['storewide']);
		$model->setApplicableTo($response['applicable_to']);
		$model->setCreatedAt($response['createdAt']);
		$model->setModifiedAt($response['modifiedAt']);
		return $model;
	}

	/**
	 * Creates and fills order shipping alternative model
	 * @param array $response
	 * @return \Tictail\Models\Response\ShippingAlternative|null
	 */
	private function _createShippingAlternative($response)
	{
		if (!is_array($response) || empty($response)) {
			return $response;
		}

		$model = new Models\ShippingAlternative();
		$model->setTitle($response['title']);
		$model->setDescription($response['description']);
		$model->setFreeAtPrice($response['free_at_price']);
		$model->setPrice($response['price']);
		$model->setMaximumDeliveryDays($response['maximum_delivery_days']);
		$model->setMinimumDeliveryDays($response['minimum_delivery_days']);
		$model->setRegions($response['regions']);
		return $model;		
	}

	/**
	 * Create and fills VAT model
	 * @param array $response
	 * @return \Tictail\Models\Response\Vat|null
	 */
	private function _createVat($response)
	{
		if (!is_array($response) || empty($response)) {
			return $response;
		}

		$model = new Models\Vat();
		$model->setRate($response['rate']);
		$model->setPrice($response['price']);
		return $model;
	}
	/**
	 * Creates and fills a memodel
	 *
	 * @param array $response
	 * @return \Tictail\Models\Response\Me
	 */
	private function _createMe($response)
	{
		$model = new Models\Me();
		$model->setId($response['id']);
		$model->setName($response['name']);
		$model->setCurrency($response['currency']);
		$model->setLanguage($response['language']);
		$model->setUrl($response['url']);
		$model->setDashboardUrl($response['dashboard_url']);
		$model->setStorekeeperEmail($response['storekeeper_email']);
		$model->setSandbox($response['sandbox']);
		$model->setCreatedAt($response['created_at']);
		$model->setModifiedAt($response['modified_at']);
		$model->setFollowers($response['followers']);
		$model->setContactEmail($response['contact_email']);
		return $model;
	}

	/**
	 * Creates and fills a thememodel
	 *
	 * @param array $response
	 * @return \Tictail\Models\Response\Theme
	 */
	private function _createTheme($response)
	{
		$model = new Models\Theme();
		$model->setId($response['id']);
		$model->setMarkup($response['markup']);
		return $model;
	}

	/**
	 * Handles the multidimensional param arrays during model creation
	 * @param array $response
	 * @param string $resourceName
	 * @return array|null|Models\Base
	 */
	private function _handleRecursive($response, $resourceName)
	{
		$result = null;
		// Resources without id
		$specialResources = array('vat', 'receiver', 'fullfilment', 'transaction');
		if (isset($response['id']) || in_array($resourceName, $specialResources)) {
			$result = $this->_convertResponseToModel($response, $resourceName);
		} else if (is_array($response)) {
			// we assume is an array of models
			$result = array();
			foreach($response as $arr){
				$result []= $this->_handleRecursive($arr, $resourceName);
			}
		}
		return $result;
	}

	/**
	 * Generates an error model based on the provided response array
	 * @param array $response
	 * @return Error
	 */
	private function _convertErrorToModel($response)
	{
		$errorModel = new Error();

		$httpStatusCode = isset($response['header']['status']) ? $response['header']['status'] : null;
		$errorModel->setHttpStatusCode($httpStatusCode);

		$responseCode = null;
		$errorModel->setResponseCode($responseCode);

		$errorMsg = 'Undefined Error. This should not happen!';
		if (isset($response['body'])) {
			if (is_array($response['body'])) {
				$errorMsg = $response['body']['message'];
			} elseif (is_string($response['body'])) {
				$errorMsg = $response['body'];
			}
		}
		$errorModel->setErrorMessage($errorMsg);

		$errorParams = array();
		if (isset($response['body'])) {
			if (is_array($response['body'])) {
				$errorMsg = $response['body']['params'];
			}
		}		
		$errorModel->setParams($errorParams);

		return $errorModel;
	}

	/**
	 * Validates the data responsed by the API
	 *
	 * @param array $response
	 * @return boolean
	 */
	public function validateResponse($response)
	{
		$returnValue = false;
		$status = $response['header']['status'];
		switch ($status) {
			case 200:
			case 201:
			case 202:
			case 203:
			case 204:
			case 205:
			case 206:
				$returnValue = true;
				break;
			default:
				$returnValue = false;
				break;
		}
		return $returnValue;
	}

	private function getErrorMessageFromArray($errorArray)
	{
		$errorMessage = array_shift($errorArray);
		if (is_array($errorMessage)) {
			return $this->getErrorMessageFromArray($errorMessage);
		} else {
			return $errorMessage;
		}
	}

	/**
	 * Converts an array into an object
	 *
	 * @param array $array
	 * @return stdClass
	 */
	public function arrayToObject($array)
	{
		return is_array($array) ? (object) array_map(array($this, 'arrayToObject'), $array) : $array;
	}

}
