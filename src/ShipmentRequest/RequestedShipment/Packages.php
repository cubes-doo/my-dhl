<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\Packages\RequestedPackages;

class Packages
{
    /**
     * @var RequestedPackages
     */
    public $RequestedPackages;

    public function __construct(
        RequestedPackages $RequestedPackages
    ) {
        $this->RequestedPackages = $RequestedPackages;
    }
}
