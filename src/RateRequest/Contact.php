<?php

namespace Cubes\MyDhl\RateRequest;

class Contact
{

    /**
     * A contact name of a person who will ship the shipment
     *
     * @var string
     */
    public $PersonName;

    /**
     * The company name shipping
     *
     * @var string
     */
    public $CompanyName;

    /**
     * The contact person phone number
     *
     * In case of questions, this person can
     * be called by the courier.
     *
     * @var string
     */
    public $PhoneNumber;

    /**
     * The email address of the contact person
     *
     * @var string
     */
    public $EmailAddress;

    /**
     * The mobile phone number of the contact person
     *
     * @var string
     */
    public $MobilePhoneNumber;

    public function __construct(
        $PersonName,
        $CompanyName,
        $PhoneNumber,
        $EmailAddress = null,
        $MobilePhoneNumber = null
    ) {
        $this->PersonName = $PersonName;
        $this->CompanyName = $CompanyName;
        $this->PhoneNumber = $PhoneNumber;
        $this->EmailAddress = $EmailAddress;
        $this->MobilePhoneNumber = $MobilePhoneNumber;
    }
}
