<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment\Packages\RequestedPackages;

class Weight
{
    public $Value;

    public function __construct($Value)
    {
        $this->Value = $Value;
    }
}
