<?php

/**
 * Product Variation response model
 *
 * @author		Claudiu Crisan <claudiu@codeworks.ro>
 * @copyright	(c) 
 * @date		25.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Response;

class Variation extends Base
{
	/**
	 * Variation title
	 * @var string 
	 */
	private $_title;
	
	/**
	 * Is there unlimited quantity of this variation?
	 * @var boolean 
	 */
	private $_unlimited;
	
	/**
	 * Number left of this variation
	 * @var integer
	 */
	private $_quantity;	
	
	/**
	 * Get title
	 * @return string
	 */
	public function getTitle() 
	{
		return $this->_title;
	}

	/**
	 * Get Is there unlimited quantity of this variation?
	 * @return boolean
	 */
	public function getUnlimited() 
	{
		return $this->_unlimited;
	}
	
	/**
	 * Get Number left of this variation
	 * @return integer
	 */
	public function getQuantity() 
	{
		return $this->_quantity;
	}
	
	/**
	 * Set title
	 * @param string $title
	 * @return \Tictail\Models\Response\Variation
	 */
	public function setTitle($title) 
	{
		$this->_title = $title;
		return $this;
	}
	
	/**
	 * Set if it's there unlimited quantity of this variation
	 * @param boolean $unlimited
	 * @return \Tictail\Models\Response\Variation
	 */
	public function setUnlimited($unlimited) 
	{
		$this->_unlimited = $unlimited;
		return $this;
	}
	
	/**
	 * Set quantity
	 * @param integer $quantity
	 * @return \Tictail\Models\Response\Variation
	 */
	public function setQuantity($quantity) 
	{
		$this->_quantity = $quantity;
		return $this;
	}

}
