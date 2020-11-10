<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment;

class Billing
{
    public $ShipperAccountNumber;
    public $ShippingPaymentType;
    public $BillingAccountNumber;

    public function __construct(
        $ShipperAccountNumber,
        $ShippingPaymentType,
        $BillingAccountNumber
    ) {
        $this->ShipperAccountNumber = $ShipperAccountNumber;
        $this->ShippingPaymentType = $ShippingPaymentType;
        $this->BillingAccountNumber = $BillingAccountNumber;
    }
}
