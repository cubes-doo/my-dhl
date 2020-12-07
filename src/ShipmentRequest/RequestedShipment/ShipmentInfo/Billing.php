<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo\Billing\ShipmentPrepaidTotalCharge;

class Billing
{
    /**
     * The DHL account number used for the shipment.
     * Used as the shipper account number.
     * Please note if you use this billing section then the `ShipmentInfo.Account` attribute is not needed.
     *
     * @var string
     */
    public $ShipperAccountNumber;
    
    /**
     * Possible values:
     * + 'S', use ShipperAccountNumber as payer
     * + 'R', use BillingAccountNumber as bill-to receiver account number
     * + 'T', use BillingAccountNumber as bill-to third party account number
     *
     * Please note if you use value R or T on this attribute then the attribute BillingAccountNumber is also mandatory
     *
     * @var string
     */
    public $ShippingPaymentType;
    
    /**
     * The DHL account number used for the shipment, if ShippingPaymentType is equal to R or T.
     *
     * @var string
     */
    public $BillingAccountNumber;
    
    /**
     * The DHL account number used for duties and tax payments.
     *
     * @var string
     */
    public $DutyAndTaxPayerAccountNumber;
    
    /**
     * The NeverOverrideBillingServices is an optional flag
     * to indicate whether to override the DHL Billing Service
     * should it be incorrectly provided.
     * This is automatically derived based on the Shipper/Receiver Address,
     * Shipper/Payer Account number and type of shipment.
     *
     * Possible values:
     * + 'N', overwrite with derived DHL Billing Service via Account Validation - Create Shipment service - default behavior
     * + 'Y', use customers provided billing special service code to derive the DHL Billing service (not recommended)
     *
     * @var string
     */
    public $NeverOverrideBillingService;
    
    /**
     * @var ShipmentPrepaidTotalCharge
     */
    public $ShipmentPrepaidTotalCharge;

    public function __construct(
        $ShippingPaymentType,
        ShipmentPrepaidTotalCharge $ShipmentPrepaidTotalCharge = null,
        $ShipperAccountNumber = null,
        $BillingAccountNumber = null,
        $DutyAndTaxPayerAccountNumber = null,
        $NeverOverrideBillingService = null
    ) {
        $this->ShipperAccountNumber = $ShipperAccountNumber;
        $this->ShippingPaymentType = $ShippingPaymentType;
        $this->BillingAccountNumber = $BillingAccountNumber;
        $this->DutyAndTaxPayerAccountNumber = $DutyAndTaxPayerAccountNumber;
        $this->NeverOverrideBillingService = $NeverOverrideBillingService;
        $this->ShipmentPrepaidTotalCharge = $ShipmentPrepaidTotalCharge;
    }
}
