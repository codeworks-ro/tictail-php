<?php

/**
 * Card response model
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		11.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Response;

class Card extends Base
{
	/**
	 * Card title
	 * @var string 
	 */
	private $_title;
	
	/**
	 * Card type, one of: media, native
	 * @var string 
	 */
	private $_cardType;
	
	/**
	 * A card's content is a dictionary with different members depending on card_type
	 * @var array 
	 */
	private $_content;
	
	/**
	 * The action url that the user will end up on when performing a card
	 * This parameter is not applicable for native cards. 
	 * @var string 
	 */
	private $_action;
	
	/**
	 * Get card title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->_title;
	}
	
	/**
	 * Set Card title
	 * @param string $title
	 * @return \Tictail\Models\Response\Card
	 */
	public function setTitle($title)
	{
		$this->_title = $title;
		return $this;
	}
	
	/**
	 * Get card type
	 * @return string
	 */
	public function getCardType()
	{
		return $this->_cardType;
	}
	
	/**
	 * Set Card type
	 * @param string $type
	 * @return \Tictail\Models\Response\Card
	 */
	public function setCardType($type)
	{
		$this->_cardType = $type;
		return $this;
	}
	
	/**
	 * Get card content
	 * @return string
	 */
	public function getContent()
	{
		return $this->_content;
	}
	
	/**
	 * Set Card content
	 * @param string $content
	 * @return \Tictail\Models\Response\Card
	 */
	public function setContent($content)
	{
		$this->_content = $content;
		return $this;
	}
	
	/**
	 * Get the action url that the user will end up on when performing a card
	 * @return string
	 */
	public function getAction()
	{
		return $this->_action;
	}
	
	/**
	 * Set Card action url
	 * @param string $action
	 * @return \Tictail\Models\Response\Card
	 */
	public function setAction($action)
	{
		$this->_action = $action;
		return $this;
	}
}
