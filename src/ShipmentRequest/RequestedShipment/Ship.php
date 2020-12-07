<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\Ship\{
    BookingRequestor,
    Buyer,
    Pickup,
    Recipient,
    Shipper
};

class Ship
{
    /**
     * @var Shipper
     */
    public $Shipper;
    /**
     * @var Pickup
     */
    public $Pickup;
    /**
     * @var BookingRequestor
     */
    public $BookingRequestor;
    /**
     * @var Buyer
     */
    public $Buyer;
    /**
     * @var Recipient
     */
    public $Recipient;

    public function __construct(
        Shipper $Shipper,
        Recipient $Recipient,
        Pickup $Pickup = null,
        BookingRequestor $BookingRequestor = null,
        Buyer $Buyer = null
    ) {
        $this->Shipper = $Shipper;
        $this->Pickup = $Pickup;
        $this->BookingRequestor = $BookingRequestor;
        $this->Buyer = $Buyer;
        $this->Recipient = $Recipient;
    }
}
