<?php

/**
 * Follower response model
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		11.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Response;

class Follower extends Base
{
	/**
	 * Email address, note that this can be a proxy email address
	 * @var string 
	 */
	private $_email;
	
	/**
	 * Get email address of the follower
	 * @return string
	 */
	public function getEmail()
	{
		return $this->_email;
	}
	
	/**
	 * Sets new email address to follower
	 * @param string $email
	 * @return \Tictail\Models\Response\Follower
	 */
	public function setEmail($email)
	{
		$this->_email = $email;
		return $this;
	}
}
