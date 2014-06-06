<?php

/**
 * Product response model
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		11.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Response;

class Product extends Base
{
	const STATUS_PUBLISHED = 'published';
	const STATUS_UNPUBLISHED = 'unpublished';
	const STATUS_DELETED = 'deleted';
	
	/**
	 * Title of the product
	 * @var string 
	 */
	private $_title;
	
	/**
	 * Description, can include some HTML
	 * @var string 
	 */
	private $_description;
	
	/**
	 * Status, one of published, unpublished, deleted
	 * @var string 
	 */
	private $_status;
	
	/**
	 * Price, in cents
	 * @var integer 
	 */
	private $_price;
		
	/**
	 * An URL-safe slug of this product's title
	 * @var string 
	 */
	private $_slug;
	
	/**
	 * Is there unlimited quantity of this product?
	 * @var boolean 
	 */
	private $_unlimited;
	
	/**
	 * The number of this product left in stock, null if unlimited
	 * @var integer
	 */
	private $_quantity;
	
	/**
	 * List with the different variations of this product, empty if no variations
	 * @var array of Tictail\Models\Response\Variation or empty array
	 */
	private $_variations;
	
	/**
	 * List with the images of this product
	 * @var array of Tictail\Models\Response\Image or empty array
	 */
	private $_images;
	
	/**
	 * Get product title
	 * @return string
	 */
	public function getTitle() 
	{
		return $this->_title;
	}
	
	/**
	 * Get product description
	 * @return string
	 */
	public function getDescription() 
	{
		return $this->_description;
	}
	
	/**
	 * Get product status, one of published, unpublished, deleted
	 * @return string
	 */
	public function getStatus() 
	{
		return $this->_status;
	}
	
	/**
	 * Get price, in cents
	 * @return integer
	 */
	public function getPrice() 
	{
		return $this->_price;
	}
	
	/**
	 * Get URL-safe slug of this product's title
	 * @return string
	 */
	public function getSlug() 
	{
		return $this->_slug;
	}
	
	/**
	 * Is there unlimited quantity of this product?
	 * @return boolean
	 */
	public function getUnlimited() 
	{
		return $this->_unlimited;
	}
	
	/**
	 * Get the number of this product left in stock, null if unlimited
	 * @return integer
	 */
	public function getQuantity() 
	{
		return $this->_quantity;
	}
	
	/**
	 * Get list with the different variations of this product, empty if no variations
	 * @return array
	 */
	public function getVariations() 
	{
		return $this->_variations;
	}

	public function getImages() 
	{
		return $this->_images;
	}
	
	/**
	 * Set title
	 * @param string $title
	 * @return \Tictail\Models\Response\Product
	 */
	public function setTitle($title) 
	{
		$this->_title = $title;
		return $this;
	}

	/**
	 * Set description
	 * @param string $description
	 * @return \Tictail\Models\Response\Product
	 */
	public function setDescription($description) 
	{
		$this->_description = $description;
		return $this;
	}

	/**
	 * Set status
	 * @param string $status
	 * @return \Tictail\Models\Response\Product
	 */
	public function setStatus($status) 
	{
		$this->_status = $status;
		return $this;
	}

	/**
	 * Set price, in cents
	 * @param integer $price
	 * @return \Tictail\Models\Response\Product
	 */
	public function setPrice($price) 
	{
		$this->_price = $price;
		return $this;
	}
		
	/**
	 * Set An URL-safe slug of this product's title
	 * @param string $slug
	 * @return \Tictail\Models\Response\Product
	 */
	public function setSlug($slug) 
	{
		$this->_slug = $slug;
		return $this;
	}
	
	/**
	 * Set if it's there unlimited quantity of this product?
	 * @param boolean $unlimited
	 * @return \Tictail\Models\Response\Product
	 */
	public function setUnlimited($unlimited) 
	{
		$this->_unlimited = $unlimited;
		return $this;
	}
	
	/**
	 * Set the number of this product left in stock, null if unlimited
	 * @param integer $quantity
	 * @return \Tictail\Models\Response\Product
	 */
	public function setQuantity($quantity) 
	{
		$this->_quantity = $quantity;
		return $this;
	}
	
	/**
	 * Set list with the different variations of this product, empty if no variations
	 * @param array $variations
	 * @return \Tictail\Models\Response\Product
	 */
	public function setVariations($variations) 
	{		
		$this->_variations = $variations;
		return $this;
	}
	
	/**
	 * Set List with the images of this product
	 * @param array $images
	 * @return \Tictail\Models\Response\Product
	 */
	public function setImages($images) 
	{
		$this->_images = $images;
		return $this;
	}

}
