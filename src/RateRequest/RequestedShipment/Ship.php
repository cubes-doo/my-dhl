<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment;

use Cubes\MyDhl\RateRequest\RequestedShipment\Ship\{Recipient, Shipper};

class Ship
{
    public $Shipper;
    public $Recipient;

    public function __construct(
        Shipper $Shipper,
        Recipient $Recipient
    ) {
        $this->Shipper = $Shipper;
        $this->Recipient = $Recipient;
    }
}