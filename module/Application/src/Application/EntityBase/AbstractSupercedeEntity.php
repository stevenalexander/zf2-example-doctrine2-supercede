<?php

namespace Application\EntityBase;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\MappedSuperclass
*/
abstract class AbstractSupercedeEntity
{
    /** @ORM\Column(name="created_by_username", type="string", length=100, nullable=false) */
    protected $_createdByUsername;

    /** @ORM\Column(name="modified_by_username", type="string", length=100, nullable=true) */
    protected $_modifiedByUsername;

    /** @ORM\Column(name="start_date", type="datetime") */
    protected $_startDate;

    /** @ORM\Column(name="end_date", type="datetime", nullable=true) */
    protected $_endDate;

    public function getCreatedByUsername()
    {
        return $this->_createdByUsername;
    }

    public function setCreatedByUsername($value)
    {
        $this->_createdByUsername = $value;
    }

    public function getModifiedByUsername()
    {
        return $this->_modifiedByUsername;
    }

    public function setModifiedByUsername($value)
    {
        $this->_modifiedByUsername = $value;
    }

    public function getStartDate()
    {
        return $this->_startDate;
    }

    public function setStartDate($value)
    {
        $this->_startDate = $value;
    }

    public function getEndDate()
    {
        return $this->_endDate;
    }

    public function setEndDate($value)
    {
        $this->_endDate = $value;
    }
}