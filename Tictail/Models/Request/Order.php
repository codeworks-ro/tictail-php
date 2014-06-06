<?php

/**
 * Order request model
 *
 * @author		Claudiu Crisan <claudiu@codeworks.ro>
 * @copyright	(c) 
 * @date		24.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Request;

class Order extends Base
{
	/**
	 * Creates an instance of the Order request model
	 */	
	public function __construct() 
	{
		$this->_serviceResource = 'stores/:store_id/orders';
	}
	
	/**
	 * Converts the model into an array to prepare method calls
	 * @param string $method should be used for handling the required parameter
	 * @return array
	 */
	public function parameterize($method) 
	{
		$parameterArray = array();
		switch ($method) {
			case 'getOne':
				break;
			case 'getAll':
				$parameterArray = $this->getFilter();
				break;
		}

		return $parameterArray;				
	}
	
}
