<?php

/**
 * Description of Theme
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		11.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Response;

class Theme extends Base
{
	/**
	 * The theme's markup, HTML containing unrendered mustache tags. 
	 * This is the code as seen in the Theme Editor
	 * @var string 
	 */
	private $_markup;
	
    /**
     * Returns the Unique identifier
     * @return string
     */
    public function getMarkup()
    {
        return $this->_markup;
    }

    /**
     * Sets the theme's markup
     * @param string $markup
     * @return \Tictail\Models\Response\Theme
     */
    public function setMarkup($markup)
    {
        $this->_markup = $markup;
        return $this;
    }
	
}