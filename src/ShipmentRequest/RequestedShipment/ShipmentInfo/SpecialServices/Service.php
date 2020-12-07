<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo\SpecialServices;

class Service
{
    /**
     * Enter the DHL Express Service code you wish to add – i.e. II for insurance
     *
     * @var string
     */
    public $ServiceType;

    /**
     * Monetary value of service (currently only applicable for Insurance)
     *
     * @var string
     */
    public $ServiceValue;

    /**
     * Currency code
     *
     * @var string
     */
    public $CurrencyCode;

    /**
     * Payment Code
     *
     * @var string
     */
    public $PaymentCode;

    /**
     * For future use.
     *
     * @var string
     */
    public $StartDate;

    /**
     * For future use.
     *
     * @var string
     */
    public $EndDate;

    /**
     * For future use.
     *
     * @var string
     */
    public $TextInstruction;

    public function __construct(
        $ServiceType,
        $ServiceValue = null,
        $CurrencyCode = null,
        $PaymentCode = null,
        $StartDate = null,
        $EndDate = null,
        $TextInstruction = null
    ) {
        $this->ServiceType = $ServiceType;
        $this->ServiceValue = $ServiceValue;
        $this->CurrencyCode = $CurrencyCode;
        $this->PaymentCode = $PaymentCode;
        $this->StartDate = $StartDate;
        $this->EndDate = $EndDate;
        $this->TextInstruction = $TextInstruction;
    }
}
