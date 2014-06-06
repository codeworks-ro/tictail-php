<?php
/**
 * Description of Base
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		11.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Request;

/**
 * Abstract Model class for request models
 */
abstract class Base 
{
	/**
	 *
	 * @var string
	 */
	protected $_storeId;
	protected $_id;
	protected $_serviceResource = null;
	protected $_filter;

	/**
	 * Converts the model into an array to prepare method calls
	 * @param string $method should be used for handling the required parameter
	 * @return array
	 */
	public abstract function parameterize($method);

	/**
	 * Returns the service ressource for this request
	 * @return string
	 */
	public final function getServiceResource()
	{
		$resource = $this->_serviceResource;
		if (strpos($resource, ':store_id') !== false){
			$storeId = $this->getStoreId();
			$resource = str_replace(':store_id', $storeId, $resource);
		}
		
		if (!empty($this->_id)){
			$resource .= '/' . $this->_id;
		}
		
		return $resource;
	}
	
	/**
	 * Returns this objects unique identifier
	 * @return string identifier
	 */
	public function getStoreId()
	{
		return $this->_storeId;
	}

	/**
	 * Sets the unique identifier of this object
	 * @param string $id
	 * @return \Tictail\Models\Request\Base
	 */
	public function setStoreId($storeId)
	{
		$this->_storeId = $storeId;
		return $this;
	}

	/**
	 * Returns this objects unique identifier
	 * @return string identifier
	 */
	public function getId()
	{
		return $this->_id;
	}

	/**
	 * Sets the unique identifier of this object
	 * @param string $id
	 * @return \Tictail\Models\Request\Base
	 */
	public function setId($id)
	{
		$this->_id = $id;
		return $this;
	}

	/**
	 * Returns the filterArray for getAll
	 * @return array
	 */
	public function getFilter()
	{
		return $this->_filter;
	}

	/**
	 * Sets the filterArray for getAll
	 * @param array $filter
	 * @return \Tictail\Models\Request\Base
	 */
	public function setFilter($filter)
	{
		$this->_filter = $filter;
		return $this;
	}
}