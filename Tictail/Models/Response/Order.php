<?php

/**
 * Order response model
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		11.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Response;

class Order extends Base 
{

	/**
	 * Order number as seen in the Dashboard
	 * @var string 
	 */
	private $_number;

	/**
	 * The total price of the order, in cents
	 * @var integer 
	 */
	private $_price;

	/**
	 * Currency code (ISO 4217) that was used in the transaction
	 * @var string 
	 */
	private $_currency;

	/**
	 * An optional note from customer
	 * @var string 
	 */
	private $_note;

	/**
	 * Transaction details, see transaction object for details
	 * @var \Tictail\Models\Response\Transaction 
	 */
	private $_transaction;

	/**
	 * Fullfilment details, see fullfilment object for details
	 * @var \Tictail\Models\Response\Fullfilment 
	 */
	private $_fullfilment;

	/**
	 * Customer, see customer object for details
	 * @var \Tictail\Models\Response\Customer 
	 */
	private $_customer;

	/**
	 * VAT applied for this order, see VAT object for details
	 * @var \Tictail\Models\Response\Vat 
	 */
	private $_vat;

	/**
	 * List of order items, see order item for details
	 * @var array of line item objects
	 */
	private $_items;

	/**
	 * List of applied discounts, see discount object for details
	 * @var array of \Tictail\Models\Response\Discount 
	 */
	private $_discounts;

	/**
	 * Used shipping alternative, see shipping alternative object for details
	 * @var \Tictail\Models\Response\ShippingAlternative 
	 */
	private $_shippingAlternative;
	
	/**
	 * Get order number as seen in the Dashboard
	 * @return string
	 */
	public function getNumber() 
	{
		return $this->_number;
	}
	
	/**
	 * Get the total price of the order, in cents
	 * @return integer
	 */
	public function getPrice() 
	{
		return $this->_price;
	}
	
	/**
	 * Get currency code (ISO 4217) that was used in the transaction
	 * @return string
	 */
	public function getCurrency() 
	{
		return $this->_currency;
	}
	
	/**
	 * Get note from customer
	 * @return string
	 */
	public function getNote() 
	{
		return $this->_note;
	}
	
	/**
	 * Get Transaction details, see transaction object for details
	 * @return Tictail\Models\Response\Transaction 
	 */
	public function getTransaction() 
	{
		return $this->_transaction;
	}
	
	/**
	 * Get Fullfilment details, see fullfilment object for details
	 * @return Tictail\Models\Response\Fullfilment
	 */
	public function getFullfilment() 
	{
		return $this->_fullfilment;
	}
	
	/**
	 * Get Customer, see customer object for details
	 * @return Tictail\Models\Response\Customer
	 */
	public function getCustomer() 
	{
		return $this->_customer;
	}
	
	/**
	 * Get VAT applied for this order, see VAT object for details
	 * @return Tictail\Models\Response\Vat
	 */
	public function getVat() 
	{
		return $this->_vat;
	}
	
	/**
	 * Get List of order items, see order item for details
	 * @return array of \Tictail\Models\Response\OrderItem
	 */
	public function getItems() 
	{
		return $this->_items;
	}
	
	/**
	 * Get List of applied discounts, see discount object for details
	 * @return array of \Tictail\Models\Response\Discount
	 */
	public function getDiscounts() 
	{
		return $this->_discounts;
	}
	
	/**
	 * Get Used shipping alternative, see shipping alternative object for details
	 * @return \Tictail\Models\Response\ShippingAlternative
	 */
	public function getShippingAlternative() 
	{
		return $this->_shippingAlternative;
	}
	
	/**
	 * Sets Order number
	 * @param string $number
	 * @return \Tictail\Models\Response\Order
	 */
	public function setNumber($number) 
	{
		$this->_number = $number;
		return $this;
	}
	
	/**
	 * Sets the total price of the order, in cents
	 * @param integer $price
	 * @return \Tictail\Models\Response\Order
	 */
	public function setPrice($price) 
	{
		$this->_price = $price;
		return $this;
	}

	/**
	 * Sets currency code (ISO 4217) that was used in the transaction
	 * @param string $currency
	 * @return \Tictail\Models\Response\Order
	 */
	public function setCurrency($currency) 
	{
		$this->_currency = $currency;
		return $this;
	}
	
	/**
	 * Sets an optional note from customer
	 * @param string $note
	 * @return \Tictail\Models\Response\Order
	 */
	public function setNote($note) 
	{
		$this->_note = $note;
		return $this;
	}
	
	/**
	 * Sets Transaction details, see transaction object for details
	 * @param \Tictail\Models\Response\Tictail\Models\Response\Transaction $transaction
	 * @return \Tictail\Models\Response\Order
	 */
	public function setTransaction(\Tictail\Models\Response\Transaction $transaction) 
	{
		$this->_transaction = $transaction;
		return $this;
	}
	
	/**
	 * Sets Fullfilment details, see fullfilment object for details
	 * @param \Tictail\Models\Response\Tictail\Models\Response\Fullfilment $fullfilment
	 * @return \Tictail\Models\Response\Order
	 */
	public function setFullfilment(\Tictail\Models\Response\Fullfilment $fullfilment) 
	{
		$this->_fullfilment = $fullfilment;
		return $this;
	}
	
	/**
	 * Sets Customer, see customer object for details
	 * @param \Tictail\Models\Response\Tictail\Models\Response\Customer $customer
	 * @return \Tictail\Models\Response\Order
	 */
	public function setCustomer(\Tictail\Models\Response\Customer $customer) 
	{
		$this->_customer = $customer;
		return $this;
	}
	
	/**
	 * Sets VAT applied for this order, see VAT object for details
	 * @param \Tictail\Models\Response\Tictail\Models\Response\Vat $vat
	 * @return \Tictail\Models\Response\Order
	 */
	public function setVat(\Tictail\Models\Response\Vat $vat) 
	{
		$this->_vat = $vat;
		return $this;
	}
	
	/**
	 * Sets order items
	 * @param array $items array of line item objects
	 * @return \Tictail\Models\Response\Order
	 */
	public function setItems($items) 
	{
		$this->_items = $items;
		return $this;
	}
	
	/**
	 * Sets order discounts
	 * @param array $discounts of Discount object
	 * @return \Tictail\Models\Response\Order
	 */
	public function setDiscounts($discounts) 
	{
		$this->_discounts = $discounts;
		return $this;
	}
	
	/**
	 * Sets Used shipping alternative, see shipping alternative object for details
	 * @param \Tictail\Models\Response\Tictail\Models\Response\ShippingAlternative $shippingAlternative
	 * @return \Tictail\Models\Response\Order
	 */
	public function setShippingAlternative(\Tictail\Models\Response\ShippingAlternative $shippingAlternative) 
	{
		$this->_shippingAlternative = $shippingAlternative;
		return $this;
	}

}
