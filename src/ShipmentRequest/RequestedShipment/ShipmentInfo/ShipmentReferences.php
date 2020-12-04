<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo\ShipmentReferences\ShipmentReference;

class ShipmentReferences
{
    public $ShipmentReference;

    public function __construct(
        ShipmentReference $ShipmentReference
    ) {
        $this->ShipmentReference = $ShipmentReference;
    }
}
