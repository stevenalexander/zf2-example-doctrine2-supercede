<?php

namespace Application\EntityBase;

interface ISupercedeEntity
{
    public function getId();

    public function getCreatedByUsername();
    public function setCreatedByUsername($value);

    public function getModifiedByUsername();
    public function setModifiedByUsername($value);

    public function getStartDate();
    public function setStartDate($value);

    public function getEndDate();
    public function setEndDate($value);
}