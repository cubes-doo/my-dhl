<?php

namespace Cubes\MyDhl\RateRequest;

class Contact
{
    public $PersonName;
    public $CompanyName;
    public $PhoneNumber;
    public $EmailAddress;
    public $MobilePhoneNumber;

    public function __construct(
        $PersonName,
        $CompanyName,
        $PhoneNumber,
        $EmailAddress,
        $MobilePhoneNumber
    ) {
        $this->PersonName        = $PersonName;
        $this->CompanyName       = $CompanyName;
        $this->PhoneNumber       = $PhoneNumber;
        $this->EmailAddress      = $EmailAddress;
        $this->MobilePhoneNumber = $MobilePhoneNumber;
    }
}