<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\Ship\Participant;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\Ship\Participant\RegistrationNumbers\RegistrationNumber;

class RegistrationNumbers
{
    /**
     * @var RegistrationNumber
     */
    public $RegistrationNumber;

    public function __construct(
        RegistrationNumber $RegistrationNumber
    ) {
        $this->RegistrationNumber = $RegistrationNumber;
    }
}
