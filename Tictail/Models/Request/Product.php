<?php

/**
 * Product request model
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		14.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Request;

class Product extends Base
{
	
	/**
	 * Create an instance of Product request model
	 */
	public function __construct() 
	{
		$this->_serviceResource = 'stores/:store_id/products';
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
