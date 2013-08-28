<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

use Application\EntityBase\AbstractSupercedeEntity;
use Application\EntityBase\ISupercedeEntity;

/**
* @ORM\Entity
* @ORM\Table(name="user")
*/
class User extends AbstractSupercedeEntity implements ISupercedeEntity
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(name="id", type="integer")
    */
    protected $_id; // Id is here so its order in DB table to preserved

    /** @ORM\Column(name="username", type="string", length=100, nullable=false) */
    protected $_username;

    /** @ORM\Column(name="active", type="boolean", nullable=false) */
    protected $_active;

    public function getId()
    {
        return $this->_id;
    }

    public function getUsername()
    {
        return $this->_username;
    }

    public function setUsername($value)
    {
        $this->_username = $value;
    }

    public function getActive()
    {
        return $this->_active;
    }

    public function setActive($value)
    {
        $this->_active = $value;
    }
}