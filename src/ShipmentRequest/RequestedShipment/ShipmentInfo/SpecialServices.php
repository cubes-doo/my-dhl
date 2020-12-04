<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo\SpecialServices\Service;

class SpecialServices
{
    /**
     * @var Service
     */
    public $Service;

    public function __construct(
        Service $Service
    ) {
        $this->Service = $Service;
    }
}
