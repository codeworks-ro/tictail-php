<?php

/**
 * Description of Base
 *
 * @author		Horatiu Cristea-Lubinschi <horatiu.cristea@gmail.com>
 * @copyright	(c) 
 * @date		11.02.2014
 * @encoding	UTF-8 
 */

namespace Tictail\Models\Response;

/**
 * Abstract Model class for response models
 */
abstract class Base
{

    /**
     * Unique identifier
     * @var string
     */
    protected $_id;

    /**
     * Unix timestamp of the creation
     * @var string
     */
    protected $_createdAt;

    /**
     * Unix timestamp of the last update
     * @var string
     */
    protected $_modifiedAt;

    /**
     * Returns the Unique identifier
     * @return string
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Sets the Unique identifier
     * @param string $id
     * @return \Tictail\Models\Response\Base
     */
    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }

    /**
     * Returns the Unix timestamp of the creation
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->_createdAt;
    }

    /**
     * Sets the Unix timestamp of the creation
     * @param string $createdAt
     * @return \Tictail\Models\Response\Base
     */
    public function setCreatedAt($createdAt)
    {
        $this->_createdAt = $createdAt;
        return $this;
    }

    /**
     * Returns the Unix timestamp of the last update
     * @return string
     */
    public function getModifiedAt()
    {
        return $this->_modifiedAt;
    }

    /**
     * Sets the Unix timestamp of the last update
     * @param string $modifiedAt
     * @return \Tictail\Models\Response\Base
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->_modifiedAt = $modifiedAt;
        return $this;
    }

}
