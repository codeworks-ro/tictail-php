<?php

/**
 * Description of Me
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		19.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Request;

/**
 * Me Model
 * The request model doesnt have any extra properties
 */
class Me extends Base 
{
	/**
	 * Creates an instance of the Me request model
	 */		
	public function __construct() 
	{
		$this->_serviceResource = 'me';
	}
	
	public function parameterize($method) 
	{
		return array();
	}

}
