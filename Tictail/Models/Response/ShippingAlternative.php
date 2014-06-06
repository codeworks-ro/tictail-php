<?php

/**
 * Description of ShippingAlternative
 *
 * @author		Claudiu Crisan <claudiu@codeworks.ro>
 * @copyright	(c) 
 * @date		25.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Response;

class ShippingAlternative extends Base
{
	/**
	 * Title
	 * @var string
	 */
	private $_title;

	/**
	 * Description
	 * @var string
	 */
	private $_description;

	/**
	 * After which order total price does this shipping alternative become free
	 * @var integer
	 */
	private $_freeAtPrice;

	/**
	 * Price for this shipping alternative, in cents
	 * @var integer
	 */
	private $_price;

	/**
	 * Minimum expected delivery days
	 * @var integer
	 */
	private $_minimumDeliveryDays;

	/**
	 * Maximum expected delivery days
	 * @var integer
	 */
	private $_maximumDeliveryDays;

	/**
	 * List of destinations this alternative is valid for as a two-letter code (ISO3166-1)
	 * @var array
	 */
	private $_regions;
	
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle() {
		return $this->_title;
	}
	
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription() {
		return $this->_description;
	}
	
	/**
	 * Get After which order total price does this shipping alternative become free
	 * @return integer
	 */
	public function getFreeAtPrice() {
		return $this->_freeAtPrice;
	}
	
	/**
	 * Get Price for this shipping alternative, in cents
	 * @return integer
	 */
	public function getPrice() {
		return $this->_price;
	}
	
	/**
	 * Get Minimum expected delivery days
	 * @return integer
	 */
	public function getMinimumDeliveryDays() {
		return $this->_minimumDeliveryDays;
	}
	
	/**
	 * Get Maximum expected delivery days
	 * @return integer
	 */
	public function getMaximumDeliveryDays() {
		return $this->_maximumDeliveryDays;
	}
	
	/**
	 * Get List of destinations this alternative is valid for as a two-letter code (ISO3166-1)
	 * @return array
	 */
	public function getRegions() {
		return $this->_regions;
	}
	
	/**
	 * Set title
	 * @param string $title
	 * @return \Tictail\Models\Response\ShippingAlternative
	 */
	public function setTitle($title) 
	{
		$this->_title = $title;
		return $this;
	}

	/**
	 * Set description
	 * @param string $description
	 * @return \Tictail\Models\Response\ShippingAlternative
	 */
	public function setDescription($description) 
	{
		$this->_description = $description;
		return $this;
	}

	/**
	 * Set after which order total price does this shipping alternative become free
	 * @param integer $freeAtPrice
	 * @return \Tictail\Models\Response\ShippingAlternative
	 */
	public function setFreeAtPrice($freeAtPrice) 
	{
		$this->_freeAtPrice = $freeAtPrice;
		return $this;
	}
	
	/**
	 * Set price for this shipping alternative, in cents
	 * @param integer $price
	 * @return \Tictail\Models\Response\ShippingAlternative
	 */
	public function setPrice($price) 
	{
		$this->_price = $price;
		return $this;
	}
	
	/**
	 * Set Minimum expected delivery days
	 * @param integer $minimumDeliveryDays
	 * @return \Tictail\Models\Response\ShippingAlternative
	 */
	public function setMinimumDeliveryDays($minimumDeliveryDays) 
	{
		$this->_minimumDeliveryDays = $minimumDeliveryDays;
		return $this;
	}
	
	/**
	 * Maximum expected delivery days
	 * @param integer $maximumDeliveryDays
	 * @return \Tictail\Models\Response\ShippingAlternative
	 */
	public function setMaximumDeliveryDays($maximumDeliveryDays) 
	{
		$this->_maximumDeliveryDays = $maximumDeliveryDays;
		return $this;
	}
	
	/**
	 * Set list of destinations this alternative is valid for as a two-letter code 
	 * @param array $regions
	 * @return \Tictail\Models\Response\ShippingAlternative
	 */
	public function setRegions($regions) 
	{
		$this->_regions = $regions;
		return $this;
	}


}
