<?php

namespace Cubes\MyDhl\RateRequest;

use Cubes\MyDhl\RateRequest\RequestedShipment\{
    Billing,
    LandedCost,
    Packages,
    Ship
};

class RequestedShipment
{
    const DROP_OFF_TYPE_REGULAR_PICKUP = 'REGULAR_PICKUP';
    const DROP_OFF_TYPE_REQUEST_COURIER = 'REQUEST_COURIER';

    const UNIT_OF_MEASUREMENT_SI = 'SI';
    const UNIT_OF_MEASUREMENT_SU = 'SU';

    const CONTENT_DOCUMENTS = 'DOCUMENTS';
    const CONTENT_NON_DOCUMENTS = 'NON_DOCUMENTS';

    /**
     * Cost And Freight
     */
    const PAYMENT_INFO_CFR = 'CFR';
    /**
     * Cost, Insurance and Freight
     */
    const PAYMENT_INFO_CIF = 'CIF';
    /**
     * Carriage And Insurance Paid
     */
    const PAYMENT_INFO_CIP = 'CIP';
    /**
     * Carriage Paid To
     */
    const PAYMENT_INFO_CPT = 'CPT';
    /**
     * Delivered At Frontier
     */
    const PAYMENT_INFO_DAF = 'DAF';
    /**
     * Delivery Duty Paid
     */
    const PAYMENT_INFO_DDP = 'DDP';
    /**
     * Delivery Duty Unpaid
     */
    const PAYMENT_INFO_DDU = 'DDU';
    /**
     * Delivered At Place
     */
    const PAYMENT_INFO_DAP = 'DAP';
    /**
     * Delivered Ex Quay (Duty Paid)
     */
    const PAYMENT_INFO_DEQ = 'DEQ';
    /**
     * Delivered Ex Ship
     */
    const PAYMENT_INFO_DES = 'DES';
    /**
     * Ex Works
     */
    const PAYMENT_INFO_EXW = 'EXW';
    /**
     * Free Alongside Ship
     */
    const PAYMENT_INFO_FAS = 'FAS';
    /**
     * Free Carrier
     */
    const PAYMENT_INFO_FCA = 'FCA';
    /**
     * Free On Board
     */
    const PAYMENT_INFO_FOB = 'FOB';

    /**
     * Return all products
     */
    const NETWORK_TYPE_CODE_AL = 'AL';
    /**
     * For Economy Select products
     */
    const NETWORK_TYPE_CODE_DD = 'DD';
    /**
     * For Time Definite products
     */
    const NETWORK_TYPE_CODE_TD = 'TD';

    /**
     * This element is to provide customers with options
     * to see DHL products and services without price.
     * This improves response times for the requests.
     *
     * If this optional tag is used
     * then the default value of Y is used to show rates
     * in the billing account currency.
     *
     * Possible values:
     * 'Y', 'N'
     *
     * @var string
     */
    public $GetRateEstimates;

    /**
     * This option is to receive a breakdown of charges
     * including taxes and discounts.
     *
     * Possible values:
     * 'Y', 'N'
     *
     * @var string
     */
    public $GetDetailedRateBreakdown;

    /**
     * To show charges in other currencies.
     * When the value is 'Y',
     * value of currencies will be returned based on:
     *  + 'BILLC', billing currency
     *  + 'PULCL', country public rates* currency
     *  + 'BASEC', base currency
     *
     * Possible values:
     * 'Y', 'N'
     *
     * @var string
     */
    public $IncludeAdditionalCurrencies;

    /**
     * Possible values:
     *
     *  + 'REGULAR_PICKUP',
     *      the pickup location is already served by a regular courier
     *       and an additional pickup does not need to be considered for this service
     *  + 'REQUEST_COURIER',
     *      the rating response returns products
     *      for which the pickup capability is given, based on ShipmentTimeStamp.
     *
     * @var string
     */
    public $DropOffType;

    /**
     * If set to Y then the query will check the Next business day
     * for products and services if your requested shipping date
     * does not provide any products and services.
     *
     * Possible values:
     * 'Y', 'N'
     *
     * @var string
     */
    public $NextBusinessDay;

    /**
     * This timestamp identifies the ready date and time of the rated shipment.
     * If the date is on a public holiday, sunday or any other day where
     * there is no pickup Capability for DHL Express
     * then no products and services will be returned.
     *
     * Format:
     * YYYY-MM-DDTHH:MM:SSGMT+k
     *
     * Example:
     * 2010-02-26T17:00:00GMT+01:00
     *
     * @var string
     */
    public $ShipTimestamp;

    /**
     * For future use
     *
     * @var string
     */
    public $PickupLocationCloseTime;

    /**
     * The unit of measurement for the dimensions of the package.
     *
     * Possible values:
     *  + 'SI', international metric system (KG, CM)
     *  + 'SU', United States system of measurement (LB, IN)
     *
     * @var string
     */
    public $UnitOfMeasurement;

    /**
     * Possible values :
     *  + 'DOCUMENTS'
     *  + 'NON_DOCUMENTS'
     *
     * @var string
     */
    public $Content;

    /**
     * Declared value of the shipment
     *
     * @var string
     */
    public $DeclaredValue;

    /**
     * 3 character currency code for the declared value (ISO 4217)
     *
     * @var string
     */
    public $DeclaredValueCurrecyCode;

    /**
     * The Incoterms applicable to your shipment.
     *
     * Possible values:
     *  + 'CFR', Cost And Freight
     *  + 'CIF', Cost, Insurance and Freight
     *  + 'CIP', Carriage And Insurance Paid
     *  + 'CPT', Carriage Paid To
     *  + 'DAF', Delivered At Frontier
     *  + 'DDP', Delivery Duty Paid
     *  + 'DDU', Delivery Duty Unpaid
     *  + 'DAP', Delivered At Place
     *  + 'DEQ', Delivered Ex Quay (Duty Paid)
     *  + 'DES', Delivered Ex Ship
     *  + 'EXW', Ex Works
     *  + 'FAS', Free Alongside Ship
     *  + 'FCA', Free Carrier
     *  + 'FOB', Free On Board
     *
     * @var string
     */
    public $PaymentInfo;

    /**
     * The DHL account number that is used for the shipment.
     * Internally attached to this account are the customer specific rates.
     *
     * !!! Please note if you use the Account tag then the Billing section below is not needed.
     *
     * @var string
     */
    public $Account;

    /**
     * The country code of the payer (ISO 3166)
     * This field is to allow rate requests with no account number provided.
     * It is mandatory to provide this input field if DHL customers
     * want to request for standard country rates but no account number is provided.
     *
     * @var string
     */
    public $PayerCountryCode;

    /**
     * If the value is 'Y' all the additional services available
     * for the product selected will be returned
     *
     * Possible values:
     * 'Y', 'N'
     *
     * @var string
     */
    public $RequestValueAddedServices;

    /**
     * DHL Product Code used to ship the items
     * If Freight charges are not provided in the Landed Cost request
     * then the ServiceType (DHL Express Product Code) has to be provided.
     *
     * @var string
     */
    public $ServiceType;

    /**
     * The NetworkTypeCode field is used to filter facility network type code.
     * The default value is AL, return all
     * products. DD is for Economy Select
     * products and TD for Time Definite
     * products.
     *
     * Possible values:
     *  + 'AL', return all products
     *  + 'DD', for Economy Select products
     *  + 'TD', for Time Definite products
     *
     * @var string
     */
    public $NetworkTypeCode;

    /**
     * Customer agreement indicator for product and services.
     * This field is for filtering agreement and non-agreement products.
     *
     * Possible values:
     * 'Y', 'N'
     *
     * @var string
     */
    public $CustomerAgreementInd;

    /**
     * Validate ready time against pickup window start on Economy Select products.
     *
     * Possible values:
     * 'Y', 'N'
     *
     * @var string
     */
    public $ValidateReadyTime;

    /**
     * @var Ship
     */
    public $Ship;

    /**
     * @var Packages
     */
    public $Packages;

    /**
     * @var Billing
     */
    public $Billing;

    /**
     * @var LandedCost
     */
    public $LandedCost;

    public function __construct(
        $DropOffType,
        $ShipTimestamp,
        $UnitOfMeasurement,
        $PaymentInfo,
        $Account,
        Ship $Ship,
        Packages $Packages,
        Billing $Billing,
        $NextBusinessDay = 'Y',
        $Content = self::CONTENT_NON_DOCUMENTS,
        LandedCost $LandedCost = null,
        $GetRateEstimates = null,
        $GetDetailedRateBreakdown = null,
        $IncludeAdditionalCurrencies = null,
        $PickupLocationCloseTime = null,
        $DeclaredValue = null,
        $DeclaredValueCurrecyCode = null,
        $PayerCountryCode = null,
        $RequestValueAddedServices = null,
        $ServiceType = null,
        $NetworkTypeCode = null,
        $CustomerAgreementInd = null,
        $ValidateReadyTime = null
    ) {
        $this->GetRateEstimates = $GetRateEstimates;
        $this->GetDetailedRateBreakdown = $GetDetailedRateBreakdown;
        $this->IncludeAdditionalCurrencies = $IncludeAdditionalCurrencies;
        $this->DropOffType = $DropOffType;
        $this->NextBusinessDay = $NextBusinessDay;
        $this->ShipTimestamp = $ShipTimestamp;
        $this->PickupLocationCloseTime = $PickupLocationCloseTime;
        $this->UnitOfMeasurement = $UnitOfMeasurement;
        $this->Content = $Content;
        $this->DeclaredValue = $DeclaredValue;
        $this->DeclaredValueCurrecyCode = $DeclaredValueCurrecyCode;
        $this->PaymentInfo = $PaymentInfo;
        $this->Account = $Account;
        $this->PayerCountryCode = $PayerCountryCode;
        $this->RequestValueAddedServices = $RequestValueAddedServices;
        $this->ServiceType = $ServiceType;
        $this->NetworkTypeCode = $NetworkTypeCode;
        $this->CustomerAgreementInd = $CustomerAgreementInd;
        $this->ValidateReadyTime = $ValidateReadyTime;

        $this->Ship = $Ship;
        $this->Packages = $Packages;
        $this->Billing = $Billing;
        $this->LandedCost = $LandedCost;
    }
}
