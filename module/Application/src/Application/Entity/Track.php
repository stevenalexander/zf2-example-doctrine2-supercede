<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

use Application\EntityBase\AbstractSupercedeEntity;
use Application\EntityBase\ISupercedeEntity;

/**
* @ORM\Entity
* @ORM\Table(name="track")
*/
class Track extends AbstractSupercedeEntity implements ISupercedeEntity
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(name="id", type="integer")
    */
    protected $_id; // Id is here so its order in DB table to preserved, not unsigned as that is db specific

    /** @ORM\Column(name="number", type="integer", length=2, nullable=false) */
    protected $_number;

    /** @ORM\Column(name="title", type="string", length=100, nullable=false) */
    protected $_title;

    public function getId()
    {
        return $this->_id;
    }

    public function getNumber()
    {
        return $this->_number;
    }

    public function setNumber($value)
    {
        $this->_number = $value;
    }

    public function getTitle()
    {
        return $this->_title;
    }

    public function setTitle($value)
    {
        $this->_title = $value;
    }
}