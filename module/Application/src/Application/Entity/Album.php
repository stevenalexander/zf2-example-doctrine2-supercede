<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

use Application\EntityBase\AbstractSupercedeEntity;
use Application\EntityBase\ISupercedeEntity;

/**
* @ORM\Entity
* @ORM\Table(name="album")
*/
class Album extends AbstractSupercedeEntity implements ISupercedeEntity
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(name="id", type="integer")
    */
    protected $_id; // Id is here so its order in DB table to preserved, not unsigned as that is db specific

    /** @ORM\Column(name="artist", type="string", length=100, nullable=false) */
    protected $_artist;

    /** @ORM\Column(name="title", type="string", length=100, nullable=false) */
    protected $_title;

    public function getId()
    {
        return $this->_id;
    }

    public function getArtist()
    {
        return $this->_artist;
    }

    public function setArtist($value)
    {
        $this->_artist = $value;
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