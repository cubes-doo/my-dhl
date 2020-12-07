<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail\ExportDeclaration\OtherCharges;

class OtherCharge
{
    /**
     * Caption can be passed to print in this attribute
     *
     * @var string
     */
    public $Caption;

    /**
     * Charge value can be passed to print in this attribute
     *
     * @var string
     */
    public $ChargeValue;

    public function __construct(
        $Caption,
        $ChargeValue
    ) {
        $this->Caption = $Caption;
        $this->ChargeValue = $ChargeValue;
    }
}
