<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\Ship\Participant;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\Ship\Participant\BankDetails\BankDetail;

class BankDetails
{
    /**
     * @var BankDetail
     */
    public $BankDetail;

    public function __construct(
        BankDetail $BankDetail
    ) {
        $this->BankDetail = $BankDetail;
    }
}
