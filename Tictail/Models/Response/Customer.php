<?php

/**
 * Customer response model
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		11.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Response;

class Customer extends Base
{
	/**
	 * Email to the customer, note that this can be a proxy email address
	 * @var string 
	 */
	private $_email;
	
	/**
	 * Full name of the customer
	 * @var string 
	 */
	private $_name;
	
	/**
	 * Country of the customer as a two-letter code (ISO 3166-1)
	 * @var string 
	 */
	private $_country;
	
	/**
	 * Preferred language of the customers as a two-letter code (ISO 639-1)
	 * @var string 
	 */
	private $_language;
	
	/**
	 * Get customer email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->_email;
	}
	
	/**
	 * Set customer email
	 * @param string $email
	 * @return \Tictail\Models\Response\Customer
	 */
	public function setEmail($email)
	{
		$this->_email = $email;
		return $this;
	}

	/**
	 * Get customer full name
	 * @return string
	 */
	public function getName()
	{
		return $this->_name;
	}
	
	/**
	 * Set customer name
	 * @param string $name
	 * @return \Tictail\Models\Response\Customer
	 */
	public function setName($name)
	{
		$this->_name = $name;
		return $this;
	}
	
	/**
	 * Get customer country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->_country;
	}
	
	/**
	 * Set customer country
	 * @param string $name
	 * @return \Tictail\Models\Response\Customer
	 */
	public function setCountry($country)
	{
		$this->_country = $country;
		return $this;
	}
	
	/**
	 * Get customer preferred language
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->_language;
	}
	
	/**
	 * Set customer preferred language
	 * @param string $name
	 * @return \Tictail\Models\Response\Customer
	 */
	public function setLanguage($language)
	{
		$this->_language = $language;
		return $this;
	}
	
}
