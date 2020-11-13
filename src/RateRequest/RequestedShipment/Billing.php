<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment;

class Billing
{
    /**
     * Use ShipperAccountNumber as payer
     */
    const SHIPPING_PAYMENT_TYPE_S = 'S';
    /**
     * Use BillingAccountNumber as bill-to receiver account number
     */
    const SHIPPING_PAYMENT_TYPE_R = 'R';
    /**
     * Use BillingAccountNumber as bill-to third party account number
     */
    const SHIPPING_PAYMENT_TYPE_T = 'T';

    /**
     * The DHL account number used for the shipment
     *
     * Please note if you use this billing
     * section then the Account attribute on RequestedShipment is not needed.
     *
     * @var string
     */
    public $ShipperAccountNumber;

    /**
     * Possible values:
     *  + 'S' (use ShipperAccountNumber as payer)
     *  + 'R' (use BillingAccountNumber as bill-to receiver account number)
     *  + 'T' (use BillingAccountNumber as bill-to third party account number)
     *
     * Please note if you use value R or T then BillingAccountNumber is also mandatory.
     *
     * @var string
     */
    public $ShippingPaymentType;

    /**
     * The DHL account number used for the shipment,
     * if ShippingPaymentType is equal to 'R' or 'T'
     *
     * @var string
     */
    public $BillingAccountNumber;

    public function __construct(
        $ShipperAccountNumber,
        $ShippingPaymentType,
        $BillingAccountNumber = null
    ) {
        $this->ShipperAccountNumber = $ShipperAccountNumber;
        $this->ShippingPaymentType = $ShippingPaymentType;
        $this->BillingAccountNumber = $BillingAccountNumber;
    }
}
