<?php

/**
 * Follower request model
 *
 * @author  Claudiu Crisan <claudiu@codeworks.ro>
 * @copyright (c) 
 * @date  21.02.2014
 * @encoding UTF-8 
 */

namespace Tictail\Models\Request;

class Follower extends Base
{

	/**
	 * Email address, note that this can be a proxy email address
	 * @var string 
	 */
	private $_email;

	/**
	 * Creates an instance of the Follower request model
	 */	
	public function __construct() 
	{
		$this->_serviceResource = 'stores/:store_id/followers';
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
			case 'create':
				$parameterArray['email'] = $this->getEmail();
				break;
			case 'getAll':
				$parameterArray = $this->getFilter();
				break;
			case 'delete':
				break;			
		}

		return $parameterArray;		
	}	

	/**
	 * Get email address of the Follower
	 * @return string
	 */
	public function getEmail()
	{
		return $this->_email;
	}

	/**
	 * Sets new email address to Follower
	 * @param string $email
	 * @return \Tictail\Models\Request\Follower
	 */
	public function setEmail($email)
	{
		$this->_email = $email;
		return $this;
	}

}
