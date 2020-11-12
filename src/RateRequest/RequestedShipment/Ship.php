<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment;

use Cubes\MyDhl\RateRequest\RequestedShipment\Ship\{Recipient, Shipper};

class Ship
{
    /**
     * @var Shipper
     */
    public $Shipper;
    
    /**
     * @var Recipient
     */
    public $Recipient;

    public function __construct(
        Shipper $Shipper,
        Recipient $Recipient
    ) {
        $this->Shipper = $Shipper;
        $this->Recipient = $Recipient;
    }
}
