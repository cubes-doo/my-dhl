<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment\LandedCost\ShipmentMonetaryAmount;

class Charges
{
    public $ChargeType;
    public $ChargeAmount;
    public $CurrencyCode;

    public function __construct(
        $ChargeType,
        $ChargeAmount,
        $CurrencyCode
    ) {
        $this->ChargeType = $ChargeType;
        $this->ChargeAmount = $ChargeAmount;
        $this->CurrencyCode = $CurrencyCode;
    }
}
