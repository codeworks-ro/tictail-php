<?php

/**
 * Product Image response model
 *
 * @author		Claudiu Crisan <claudiu@codeworks.ro>
 * @copyright	(c) 
 * @date		25.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Response;

class Image extends Base 
{
	/**
	 * Width of original image
	 * @var int
	 */
	private $_originalWidth; 
	
	/**
	 * Height of original image
	 * @var int
	 */
	private $_originalHeight; 
	
	
	/**
	 * An object with urls keyed by the different sizes of this image, 
	 * 30, 40, 45, 50, 75, 100, 300, 500, 640, 1000 and 2000
	 * @var array 
	 */
	private $_sizes;

	/**
	 * Get width of original image
	 * @return int
	 */
	public function getOriginalWidth() 
	{
		return $this->_originalWidth;
	}
	
	/**
	 * Set width of original image
	 * @param int width
	 * @return \Tictail\Models\Response\Image
	 */
	public function setOriginalWidth($width) 
	{
		$this->_originalWidth = $width;
		return $this;
	}

	/**
	 * Get height of original image
	 * @return int
	 */
	public function getOriginalHeight() 
	{
		return $this->_originalHeight;
	}
	
	/**
	 * Set height of original image
	 * @param int height
	 * @return \Tictail\Models\Response\Image
	 */
	public function setOriginalHeight($height) 
	{
		$this->_originalHeight = $height;
		return $this;
	}
	
	/**
	 * Get image sizes
	 * @return array
	 */
	public function getSizes() 
	{
		return $this->_sizes;
	}
	
	/**
	 * Set image sizes
	 * @param array $sizes
	 * @return \Tictail\Models\Response\Image
	 */
	public function setSizes($sizes) 
	{
		$this->_sizes = $sizes;
		return $this;
	}

}
