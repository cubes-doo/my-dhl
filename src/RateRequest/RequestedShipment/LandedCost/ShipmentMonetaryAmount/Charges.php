<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment\LandedCost\ShipmentMonetaryAmount;

class Charges
{
    const CHARGE_TYPE_FREIGHT = 'FREIGHT';
    const CHARGE_TYPE_ADDITIONAL_CHARGE = 'ADDITIONAL_CHARGE';
    const CHARGE_TYPE_INSURANCE = 'INSURANCE';

    /**
     * The additional charges from merchant
     * that they would like to aggregate and sum up
     * as part of Total Landed Cost.
     *
     * Possible values:
     *  + 'FREIGHT'
     *  + 'ADDITIONAL_CHARGE'
     *  + 'INSURANCE'
     *
     * @var string
     */
    public $ChargeType;

    /**
     * The total charge amount of the specific charge
     *
     * @var string
     */
    public $ChargeAmount;

    /**
     * The currency code (ISO 3166)
     *
     * @var string
     */
    public $CurrencyCode;

    public function __construct(
        $ChargeType,
        $ChargeAmount,
        $CurrencyCode
    ) {
        $this->ChargeType = $ChargeType;
        $this->ChargeAmount = $ChargeAmount;
        $this->CurrencyCode = $CurrencyCode;
    }
}
