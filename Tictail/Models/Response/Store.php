<?php

/**
 * Description of Store
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		11.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Response;

class Store extends Base 
{

    /**
     * Store name
     * @var string
     */
    private $_name;
    
    /**
     * ISO 4217 formatted currency code
     * @var string
     */
    private $_currency;
	
	/**
	 * ISO 639-1 two letter code
	 * @var string 
	 */
	private $_language;
	
	/**
	 * URL to store
	 * @var string
	 */
	private $_url;
	
	/**
	 * URL to store's dashboard
	 * @var string 
	 */
	private $_dashboardUrl;
	
	/**
	 * Email of storekeeper
	 * @var string 
	 */
	private $_storekeeperEmail;
	
	/**
	 * Contact email for customers
	 * @var string 
	 */
	private $_contactEmail;
	
	
	/**
	 * Whether or not this store is a sandbox store
	 * @var bool 
	 */
	private $_sandbox;
	
	/**
	 * Number of followers
	 * @var int 
	 */
	private $_followers; 

    /**
     * Returns Store name
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Sets Store name
     * @param string $name
     * @return \Tictail\Models\Response\Store
     */
    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }
	
    /**
     * Returns Currency of the store 
     * @return string
     */
    public function getCurrency()
    {
        return $this->_currency;
    }

    /**
     * Sets Currency of the store 
     * @param string $currency
     * @return \Tictail\Models\Response\Store
     */
    public function setCurrency($currency)
    {
        $this->_currency = $currency;
        return $this;
    }
	
    /**
     * Sets Language of the store 
     * @return string
     */
	public function getLanguage()
	{
		return $this->_language;
	}
	
    /**
     * Sets Language of the store 
     * @param string $language
     * @return \Tictail\Models\Response\Store
     */    
	public function setLanguage($language)
    {
        $this->_language = $language;
        return $this;
    }
	
    /**
     * Returns URL to store 
     * @return string
     */
	public function getUrl()
	{
		return $this->_url;
	}
	
    /**
     * Sets URL to store
     * @param string $url
     * @return \Tictail\Models\Response\Store
     */    
	public function setUrl($url)
    {
        $this->_url = $url;
        return $this;
    }

    /**
     * Returns URL to stores dashboard 
     * @return string
     */
	public function getDashboardUrl()
	{
		return $this->_dashboardUrl;
	}
	
    /**
     * Sets URL to stores dashboard
     * @param string $url
     * @return \Tictail\Models\Response\Store
     */    
	public function setDashboardUrl($url)
    {
        $this->_dashboardUrl = $url;
        return $this;
    }

    /**
     * Returns Email to storekeeper
     * @return string
     */
	public function getStorekeeperEmail()
	{
		return $this->_storekeeperEmail;
	}
	
    /**
     * Sets Email to storekeeper
     * @param string $email
     * @return \Tictail\Models\Response\Store
     */    
	public function setStorekeeperEmail($email)
    {
        $this->_storekeeperEmail = $email;
        return $this;
    }

    /**
     * Returns contact email for customers
     * @return string
     */
	public function getContactEmail()
	{
		return $this->_contactEmail;
	}
	
    /**
     * Sets contact email for customers
     * @param string $email
     * @return \Tictail\Models\Response\Store
     */    
	public function setContactEmail($email)
    {
        $this->_contactEmail = $email;
        return $this;
    }	
	
    /**
     * Returns Whether or not this store is a sandbox store
     * @return string
     */
	public function getSandbox()
	{
		return $this->_sandbox;
	}
	
    /**
     * Sets Whether or not this store is a sandbox store
     * @param string $sandbox
     * @return \Tictail\Models\Response\Store
     */    
	public function setSandbox($sandbox)
    {
        $this->_sandbox = $sandbox;
        return $this;
    }
	
    /**
     * Returns Number of followers
     * @return int
     */
	public function getFollowers()
	{
		return $this->_followers;
	}
	
    /**
     * Sets the number of followers
     * @param int $followers
     * @return \Tictail\Models\Response\Store
     */    
	public function setFollowers($followers)
    {
        $this->_followers = $followers;
        return $this;
    }	
}
