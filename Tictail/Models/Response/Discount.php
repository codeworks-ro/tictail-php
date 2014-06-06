<?php

/**
 * Discount response model
 *
 * @author		Claudiu Crisan <claudiu@codeworks.ro>
 * @copyright	(c) 
 * @date		25.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Response;

class Discount extends Base
{	
	/**
	 *  Discount statuses
	 */
	const STATUS_PUBLISHED = 'published';
	const STATUS_UNPUBLISHED = 'unpublished';
	const STATUS_DELETED = 'deleted';
	
	/**
	 * Discount type percent_off
	 */
	const TYPE_PERCENT = 'percent_off';
	
	/**
	 * Discount type money_off
	 */
	const TYPE_MONEY = 'money_off';
	
	/**
	 * Discount title
	 * @var string
	 */
	private $_title;
	
	/**
	 * Discount status, one of: published, unpublished, deleted
	 * @var string
	 */
	private $_status;
	
	/**
	 * Discount type, one of: percent_off, money_off
	 * @var string
	 */
	private $_type;
	
	/**
	 * Discount amount, in percentage for discount_off and in cents for money_off
	 * @var integer 
	 */
	private $_amount;
	
	/**
	 * Minimum price when this discount is applied, in cents
	 * @var integer 
	 */
	private $_minimumPrice;
	
	/**
	 * Is this discount available for all products in the store?
	 * @var boolean 
	 */
	private $_storewide;
	
	/**
	 * Which categories and products is this discount applicable to
	 * @var type 
	 */
	private $_applicableTo;
	
	/**
	 * Get Discount title
	 * @return string
	 */
	public function getTitle() 
	{
		return $this->_title;
	}
	
	/**
	 * Get Discount status, one of: published, unpublished, deleted
	 * @return string
	 */
	public function getStatus() 
	{
		return $this->_status;
	}
	
	/**
	 * Sets discount status
	 * @param string $status
	 * @return \Tictail\Models\Response\Discount
	 */
	public function setStatus($status) 
	{
		$this->_status = $status;
		return $this;
	}	
	
	/**
	 * Get Discount type, one of: percent_off, money_off
	 * @return string
	 */
	public function getType()
	{
		return $this->_type;
	}
	
	/**
	 * Sets discount type
	 * @param string $type
	 * @return \Tictail\Models\Response\Discount
	 */
	public function setType($type) 
	{
		$this->_type = $type;
		return $this;
	}
	
	/**
	 * Get discount amount in percentage or in cents based on discount type
	 * @return integer
	 */
	public function getAmount()
	{
		return $this->_amount;
	}

	/**
	 * Sets discount amount 
	 * @param integer $amount
	 * @return \Tictail\Models\Response\Discount
	 */
	public function setAmount($amount) 
	{
		$this->_amount = $amount;
		return $this;
	}
	
	/**
	 * Get Minimum price when this discount is applied, in cents
	 * @return integer
	 */
	public function getMinimumPrice()
	{
		return $this->_minimumPrice;
	}
	
	/**
	 * Sets Minimum price when this discount is applied, in cents
	 * @param integer $minimumPrice
	 * @return \Tictail\Models\Response\Discount
	 */
	public function setMinimumPrice($minimumPrice) 
	{
		$this->_minimumPrice = $minimumPrice;
		return $this;
	}
		
	/**
	 * Is this discount available for all products in the store?
	 * @return boolean
	 */
	public function getStorewide()
	{
		return $this->_storewide;
	}
	
	/**
	 * Set if this discount available for all products in the store?
	 * @param boolean $storewide
	 * @return \Tictail\Models\Response\Discount
	 */
	public function setStorewide($storewide) 
	{
		$this->_storewide = $storewide;
		return $this;
	}	
	
	/**
	 * Which categories and products is this discount applicable to
	 * @return type TODO
	 */
	public function getApplicableTo()
	{
		return $this->_applicableTo;
	}
	
	/**
	 * Sets Which categories and products is this discount applicable to
	 * TODO
	 * @param type $applicableTo
	 * @return \Tictail\Models\Response\Discount
	 */
	public function setApplicableTo($applicableTo) 
	{
		$this->_applicableTo = $applicableTo;
		return $this;
	}


}
