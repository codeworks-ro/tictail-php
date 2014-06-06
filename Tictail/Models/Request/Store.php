<?php

/**
 * Description of Store
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		13.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Request;

/**
 * Store Model
 * The request model doesnt have any properties
 */
class Store extends Base
{
	/**
	 * Creates an instance of the Store request model
	 */	
	public function __construct() 
	{
		$this->_serviceResource = 'stores';
	}

	/**
	 * Returns an array of parameters customized for the argumented methodname
	 * @param string $method
	 * @return array
	 */
	public function parameterize($method)
	{
		$parameterArray = array();
		switch ($method) {
			case 'create':
			case 'update':
				break;
			case 'getOne':
				break;
			case 'getAll':
				break;
			case 'delete':
				break;
		}

		return $parameterArray;
	}
}
