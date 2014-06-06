<?php

/**
 * OrderItem
 *
 * @author  Claudiu Crisan <claudiu@codeworks.ro>
 * @copyright (c) 
 * @date  25.02.2014
 * @encoding UTF-8 
 */

namespace Tictail\Models\Response;

class OrderItem extends Base
{
	/**
	 * Total price of this line item, in cents
	 * @var integer
	 */
	private $_price;

	/**
	 * Currency code (ISO 4217) of item price
	 * @var string
	 */
	private $_currency;

	/**
	 * Number of this item in the order
	 * @var integer
	 */
	private $_quantity;

	/**
	 * The product this line item refers to, with a specified variation, 
	 * see line item object for details	
	 * @var Tictail\Models\Response\Product
	 */
	private $_product;
	
	/**
	 * Get Total price of this line item, in cents
	 * @return integer
	 */
	public function getPrice() 
	{
		return $this->_price;
	}
	
	/**
	 * Get Currency code (ISO 4217) of item price
	 * @return string
	 */
	public function getCurrency() 
	{
		return $this->_currency;
	}
	
	/**
	 * Get Number of this item in the order
	 * @return integer
	 */
	public function getQuantity() 
	{
		return $this->_quantity;
	}
	
	/**
	 * The product this line item refers to, with a specified variation, 
	 * see line item object for details
	 * @return \Tictail\Models\Response\Product
	 */
	public function getProduct() 
	{
		return $this->_product;
	}
	
	/**
	 * Sets Total price of this line item, in cents
	 * @param integer $price
	 * @return \Tictail\Models\Response\OrderItem
	 */
	public function setPrice($price) 
	{
		$this->_price = $price;
		return $this;
	}
	
	/**
	 * Sets Currency code (ISO 4217) of item price
	 * @param string $currency
	 * @return \Tictail\Models\Response\OrderItem
	 */
	public function setCurrency($currency) 
	{
		$this->_currency = $currency;
		return $this;
	}
	
	/**
	 * Sets Number of this item in the order
	 * @param integer $quantity
	 * @return \Tictail\Models\Response\OrderItem
	 */
	public function setQuantity($quantity) 
	{
		$this->_quantity = $quantity;
		return $this;
	}
	
	/**
	 * Sets The product this line item refers to, with a specified variation, 
	 * see line item object for details
	 * @param \Tictail\Models\Response\Tictail\Models\Response\Product $product
	 * @return \Tictail\Models\Response\OrderItem
	 */
	public function setProduct(Tictail\Models\Response\Product $product) 
	{
		$this->_product = $product;
		return $this;
	}

}
