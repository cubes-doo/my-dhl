<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment;

use Cubes\MyDhl\RateRequest\RequestedShipment\Packages\RequestedPackage;

class Packages
{
    public $RequestedPackages;

    public function __construct(RequestedPackage $RequestedPackages)
    {
        $this->RequestedPackages = $RequestedPackages;
    }
}
