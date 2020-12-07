<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo\Billing;

class ShipmentPrepaidTotalCharge
{
    const PAYMENT_METHOD_CASH = 'CASH';

    /**
     * Payment currency code
     *
     * @var string
     */
    public $CurrencyCode;

    /**
     * Amount of payment
     *
     * @var string
     */
    public $Amount;

    /**
     * Payment method
     *
     * Possible values:
     * + 'CASH'
     *
     * @var string
     */
    public $PaymentMethod;

    public function __construct(
        $CurrencyCode,
        $Amount,
        $PaymentMethod = self::PAYMENT_METHOD_CASH
    ) {
        $this->CurrencyCode = $CurrencyCode;
        $this->Amount = $Amount;
        $this->PaymentMethod = $PaymentMethod;
    }
}
