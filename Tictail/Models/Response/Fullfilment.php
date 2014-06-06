<?php

/**
 * Order Fullfilment response object
 *
 * @author  Claudiu Crisan <claudiu@codeworks.ro>
 * @copyright (c) 
 * @date  25.02.2014
 * @encoding UTF-8 
 */

namespace Tictail\Models\Response;

class Fullfilment extends Base
{	
	/**
	 * Statuses of the order fullfilment
	 */
	const STATUS_UNHANDLED = 'unhandled';
	const STATUS_SHIPPED = 'shipped';
	const STATUS_CANCELLED = 'cancelled';
	const STATUS_REFUNDED = 'refunded';
	
	/**
	 * Status of the order fullfilment, one of: unhandled, shipped, cancelled or refunded
	 * @var string
	 */
	private $_status;
	
	/**
	 * Order receiver, see receiver object for details
	 * @var \Tictail\Models\Response\Receiver 
	 */
	private $_receiver;
	
	/**
	 * Tracking number of order provided by store owner upon shipping
	 * @var string 
	 */
	private $_trackingNumber;
	
	/**
	 * Name of forwarder agent fullfilling the order
	 * @var string 
	 */
	private $_provider;
	
	/**
	 * Timestamp when order was shipped
	 * @var string 
	 */
	private $_shippedAt;
	
	/**
	 * The total price of the shipping paid by the customer, in cents
	 * @var integer 
	 */
	private $_price;
	
	/**
	 * Currency code (ISO 4217) of the shipping price
	 * @var string 
	 */
	private $_currency;
	
	/**
	 * VAT object, see VAT object for details
	 * @var Tictail\Models\Response\Vat 
	 */
	private $_vat;
	
	public function getStatus() 
	{
		return $this->_status;
	}
	
	/**
	 * Get order receiver, see receiver object for details
	 * @return \Tictail\Models\Response\Receiver
	 */
	public function getReceiver() 
	{
		return $this->_receiver;
	}
	
	/**
	 * Get tracking number of order provided by store owner upon shipping
	 * @return string
	 */
	public function getTrackingNumber() 
	{
		return $this->_trackingNumber;
	}
	
	/**
	 * Get name of forwarder agent fullfilling the order
	 * @return string
	 */
	public function getProvider() 
	{
		return $this->_provider;
	}
	
	/**
	 * Get timestamp when order was shipped
	 * @return string
	 */
	public function getShippedAt() 
	{
		return $this->_shippedAt;
	}
	
	/**
	 * Get the total price of the shipping paid by the customer, in cents
	 * @return integer
	 */
	public function getPrice() 
	{
		return $this->_price;
	}
	
	/**
	 * Get currency code (ISO 4217) of the shipping price
	 * @return string
	 */
	public function getCurrency() 
	{
		return $this->_currency;
	}
	
	/**
	 * Get VAT, see Vat object for details
	 * @return Tictacil\Models\Response\Vat
	 */
	public function getVat() 
	{
		return $this->_vat;
	}
	
	/**
	 * Set status of the order fullfilment, one of: unhandled, shipped, cancelled or refunded
	 * @param string $status
	 */
	public function setStatus($status) 
	{
		$this->_status = $status;
	}	
	
	/**
	 * Set order receiver
	 * @param \Tictail\Models\Response\Tictail\Models\Response\Receiver $receiver
	 * @return \Tictail\Models\Response\Fullfilment
	 */
	public function setReceiver(\Tictail\Models\Response\Receiver $receiver) 
	{
		$this->_receiver = $receiver;
		return $this;
	}
	
	/**
	 * Set tracking number of order
	 * @param string $trackingNumber
	 * @return \Tictail\Models\Response\Fullfilment
	 */
	public function setTrackingNumber($trackingNumber) 
	{
		$this->_trackingNumber = $trackingNumber;
		return $this;
	}
	
	/**
	 * Sets name of forwarder agent fullfilling the order
	 * @param string $provider
	 * @return \Tictail\Models\Response\Fullfilment
	 */
	public function setProvider($provider) 
	{
		$this->_provider = $provider;
		return $this;
	}
	
	/**
	 * Sets timestamp when order will be shipped
	 * @param string $shippedAt
	 * @return \Tictail\Models\Response\Fullfilment
	 */
	public function setShippedAt($shippedAt) 
	{
		$this->_shippedAt = $shippedAt;
		return $this;
	}
	
	/**
	 * Sets the total price of the shipping paid by the customer, in cents
	 * @param integer $price
	 * @return \Tictail\Models\Response\Fullfilment
	 */
	public function setPrice($price) 
	{
		$this->_price = $price;
		return $this;
	}
	
	/**
	 * Sets currency code (ISO 4217) of the shipping price
	 * @param string $currency
	 * @return \Tictail\Models\Response\Fullfilment
	 */
	public function setCurrency($currency) 
	{
		$this->_currency = $currency;
		return $this;
	}
	
	/**
	 * Set VAT, see Vat object for details
	 * @param \Tictail\Models\Response\Tictail\Models\Response\Vat $vat
	 * @return \Tictail\Models\Response\Fullfilment
	 */
	public function setVat(\Tictail\Models\Response\Vat $vat) 
	{
		$this->_vat = $vat;
		return $this;
	}

}
