<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\Ship;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\Ship\Participant\{
    Contact,
    Address,
    RegistrationNumbers,
    BankDetails
};

class Participant
{
    /**
     * @var Contact
     */
    public $Contact;

    /**
     * @var Address
     */
    public $Address;

    /**
     * @var RegistrationNumbers
     */
    public $RegistrationNumbers;

    /**
     * @var BankDetails
     */
    public $BankDetails;

    public function __construct(
        Contact $Contact,
        Address $Address,
        RegistrationNumbers $RegistrationNumbers,
        BankDetails $BankDetails
    ) {
        $this->Contact = $Contact;
        $this->Address = $Address;
        $this->RegistrationNumbers = $RegistrationNumbers;
        $this->BankDetails = $BankDetails;
    }
}
