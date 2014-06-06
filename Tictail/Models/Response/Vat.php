<?php

/**
 * Vat response model (VAT)
 *
 * @author		Claudiu Crisan <claudiu@codeworks.ro>
 * @copyright	(c) 
 * @date		25.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Response;

class Vat extends Base
{
	/**
	 * VAT rate, will be zero if VAT was not applied
	 * @var float 
	 */
	private $_rate;

	/**
	 * The total amount of VAT in cents, will be zero if VAT not applied
	 * @var integer 
	 */
	private $_price;
	
	/**
	 * Get VAT rate, will be zero if VAT was not applied
	 * @return float
	 */
	public function getRate() 
	{
		return $this->_rate;
	}
	
	/**
	 * Get the total amount of VAT in cents, will be zero if VAT not applied
	 * @return integer
	 */
	public function getPrice() 
	{
		return $this->_price;
	}
	
	/**
	 * Set VAT rate, will be zero if VAT was not applied
	 * @param float $rate
	 * @return \Tictail\Models\Response\Vat
	 */
	public function setRate($rate) 
	{
		$this->_rate = $rate;
		return $this;
	}
	
	/**
	 * Set the total amount of VAT in cents, will be zero if VAT not applied
	 * @param integer $price
	 * @return \Tictail\Models\Response\Vat
	 */
	public function setPrice($price) 
	{
		$this->_price = $price;
		return $this;
	}

}
