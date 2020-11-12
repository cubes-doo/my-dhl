<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment\LandedCost;

use Cubes\MyDhl\RateRequest\RequestedShipment\LandedCost\ShipmentMonetaryAmount\Charges;

class ShipmentMonetaryAmount
{
    /**
     * @var Charges
     */
    public $Charges;

    public function __construct(
        Charges $Charges
    ) {
        $this->Charges = $Charges;
    }
}
