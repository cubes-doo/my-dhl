<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment\Ship;

use Cubes\MyDhl\RateRequest\Address;
use Cubes\MyDhl\RateRequest\RequestedShipment\Ship\Shipper\Contact;

class Shipper extends Address
{
    public $Contact;

    public function __construct(
        Contact $Contact
    ) {
        $this->Contact = $Contact;
    }
}
