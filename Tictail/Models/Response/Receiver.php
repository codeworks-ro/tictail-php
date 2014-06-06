<?php

/**
 * Order Receiver response model
 *
 * @author		Claudiu Crisan <claudiu@codeworks.ro>
 * @copyright	(c) 
 * @date		25.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Response;

class Receiver extends Base
{
	/**
	 * Full name of the receiver
	 * @var string
	 */
	private $_name;
	
	/**
	 * Phone number to receiver
	 * @var string
	 */
	private $_phone;
	
	/**
	 * Street of the receivers address
	 * @var string
	 */
	private $_street;
	
	/**
	 * State of the receivers address
	 * @var string
	 */
	private $_state;
	
	/**
	 * City of the receivers address
	 * @var string
	 */
	private $_city;
	
	/**
	 * Zipcode of the receivers address
	 * @var string
	 */
	private $_zip;
	
	/**
	 * Country of the receivers address	
	 * @var string
	 */
	private $_country;
	
	/**
	 * Get Full name of the receiver
	 * @return string
	 */
	public function getName() 
	{
		return $this->_name;
	}
	
	/**
	 * Get Phone number to receiver
	 * @return string
	 */
	public function getPhone() 
	{
		return $this->_phone;
	}
	
	/**
	 * Get Street of the receivers address
	 * @return string
	 */
	public function getStreet() 
	{
		return $this->_street;
	}
	
	/**
	 * Get State of the receivers address
	 * @return string
	 */
	public function getState() 
	{
		return $this->_state;
	}
	
	/**
	 * Get City of the receivers address
	 * @return string
	 */
	public function getCity() 
	{
		return $this->_city;
	}
	
	/**
	 * Get Zipcode of the receivers address
	 * @return string
	 */
	public function getZip() 
	{
		return $this->_zip;
	}
	
	/**
	 * Get Country of the receivers address
	 * @return string
	 */
	public function getCountry() 
	{
		return $this->_country;
	}
	
	/**
	 * Sets Full name of the receiver
	 * @param string $name
	 * @return \Tictail\Models\Response\Receiver
	 */
	public function setName($name) 
	{
		$this->_name = $name;
		return $this;
	}
	
	/**
	 * Sets Phone number to receiver
	 * @param string $phone
	 * @return \Tictail\Models\Response\Receiver
	 */
	public function setPhone($phone) 
	{
		$this->_phone = $phone;
		return $this;
	}
	
	/**
	 * Sets Street of the receivers address
	 * @param string $street
	 * @return \Tictail\Models\Response\Receiver
	 */
	public function setStreet($street) 
	{
		$this->_street = $street;
		return $this;
	}
	
	/**
	 * Sets State of the receivers address
	 * @param string $state
	 * @return \Tictail\Models\Response\Receiver
	 */
	public function setState($state) 
	{
		$this->_state = $state;
		return $this;
	}
	
	/**
	 * Sets City of the receivers address
	 * @param string $city
	 * @return \Tictail\Models\Response\Receiver
	 */
	public function setCity($city) 
	{
		$this->_city = $city;
		return $this;
	}
	
	/**
	 * Sets Zipcode of the receivers address
	 * @param string $zip
	 * @return \Tictail\Models\Response\Receiver
	 */
	public function setZip($zip) 
	{
		$this->_zip = $zip;
		return $this;
	}
	
	/**
	 * Sets Country of the receivers address
	 * @param string $country
	 * @return \Tictail\Models\Response\Receiver
	 */
	public function setCountry($country) 
	{
		$this->_country = $country;
		return $this;
	}


}
