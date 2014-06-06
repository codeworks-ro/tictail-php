<?php

/**
 * Order Transaction response model
 *
 * @author		Claudiu Crisan <claudiu@codeworks.ro>
 * @copyright	(c) 
 * @date		25.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Response;

class Transaction extends Base
{
	const STATUS_PAID = 'paid';
	const STATUS_REFUNDED = 'refunded';
	const STATUS_PENDING = 'pending';
	const STATUS_DENIED = 'denied';
	
	/**
	 * Status of the order transaction, one of: paid, refunded, pending or denied
	 * @var string 
	 */
	private $_status;
	
	/**
	 * Processor used to pay the order
	 * @var string 
	 */
	private $_processor;
	
	/**
	 * Processor reference, such as transaction number or invoice number
	 * @var string 
	 */
	private $_reference;
	
	/**
	 * Timestamp when the transaction was settled
	 * @var string 
	 */
	private $_paidAt;
	
	/**
	 * Get status of the order transaction, one of: paid, refunded, pending or denied
	 * @return string
	 */
	public function getStatus() 
	{
		return $this->_status;
	}
	
	/**
	 * Get processor used to pay the order
	 * @return string
	 */
	public function getProcessor() 
	{
		return $this->_processor;
	}

	/**
	 * Get processor reference, such as transaction number or invoice number
	 * @return string
	 */
	public function getReference() 
	{
		return $this->_reference;
	}
	
	/**
	 * Get timestamp when the transaction was settled
	 * @return string
	 */
	public function getPaidAt() 
	{
		return $this->_paidAt;
	}
	
	/**
	 * Set status of the order transaction, one of: paid, refunded, pending or denied
	 * @param string $status
	 */
	public function setStatus($status) 
	{
		$this->_status = $status;
	}
	
	/**
	 * Set processor used to pay the order
	 * @param string $processor
	 */
	public function setProcessor($processor) 
	{
		$this->_processor = $processor;
	}
	
	/**
	 * Set processor reference, such as transaction number or invoice number
	 * @param string $reference
	 */
	public function setReference($reference) 
	{
		$this->_reference = $reference;
	}
	
	/**
	 * Set timestamp when the transaction was settled
	 * @param string $paid_at
	 */
	public function setPaidAt($paidAt) 
	{
		$this->_paidAt = $paidAt;
	}

}
