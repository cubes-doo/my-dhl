<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail\ExportDeclaration;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail\ExportDeclaration\OtherCharges\OtherCharge;

class OtherCharges
{
    /**
     * @var OtherCharge
     */
    public $OtherCharge;

    public function __construct(
        OtherCharge $OtherCharge
    ) {
        $this->OtherCharge = $OtherCharge;
    }
}
