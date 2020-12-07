<?php

namespace Cubes\MyDhl\ShipmentRequest;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\{
    DangerousGoods,
    InternationalDetail,
    OnDemandDeliveryOptions,
    Packages,
    Ship,
    ShipmentInfo,
    ShipmentNotifications
};

class RequestedShipment
{
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
     * This timestamp identifies the pickup date and time of the rated shipment.
     * If the date is on a public holiday, Sunday or any other day where there
     * is no pickup, the rate request will return this in the error code as it is a
     * non valid request.
     *
     * Format:
     * YYYY-MM-DDTHH:MM:SSGMT+k
     *
     * @var string
     */
    public $ShipTimestamp;

    /**
     * This node identifies the closing time of your pickup location in local time.
     *
     * Format:
     * HH:mm
     *
     * @var string
     */
    public $PickupLocationCloseTime;

    /**
     * This node details special pickup instructions you may wish to send to the DHL Courier
     *
     * @var string
     */
    public $SpecialPickupInstruction;

    /**
     * This node provides information on where the package should be picked up by DHL courier.
     *
     * @var string
     */
    public $PickupLocation;

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
     * Request for ODD link URL for the specified Waybill Number, Shipper Account Number
     *
     * Possible values:
     * 'Y', 'N'
     *
     * @var string
     */
    public $OnDemandDeliveryURLRequest;

    /**
     * This field is used to return the TotalNet in the response message.
     * The default value for this field is N.
     * Please note that this may increase response times.
     *
     * Possible values:
     * 'Y', 'N'
     *
     * @var string
     */
    public $GetRateEstimates;

    /**
     * @var ShipmentInfo
     */
    public $ShipmentInfo;

    /**
     * @var InternationalDetail
     */
    public $InternationalDetail;

    /**
     * @var OnDemandDeliveryOptions
     */
    public $OnDemandDeliveryOptions;

    /**
     * @var Ship
     */
    public $Ship;

    /**
     * @var Packages
     */
    public $Packages;

    /**
     * @var DangerousGoods
     */
    public $DangerousGoods;

    /**
     * @var ShipmentNotifications
     */
    public $ShipmentNotifications;

    public function __construct(
        $ShipTimestamp,
        $PaymentInfo,
        ShipmentInfo $ShipmentInfo,
        InternationalDetail $InternationalDetail,
        Ship $Ship,
        Packages $Packages,
        OnDemandDeliveryOptions $OnDemandDeliveryOptions = null,
        DangerousGoods $DangerousGoods = null,
        ShipmentNotifications $ShipmentNotifications = null,
        $PickupLocationCloseTime = null,
        $SpecialPickupInstruction = null,
        $PickupLocation = null,
        $OnDemandDeliveryURLRequest = null,
        $GetRateEstimates = null
    ) {
        $this->ShipTimestamp = $ShipTimestamp;
        $this->PickupLocationCloseTime = $PickupLocationCloseTime;
        $this->SpecialPickupInstruction = $SpecialPickupInstruction;
        $this->PickupLocation = $PickupLocation;
        $this->PaymentInfo = $PaymentInfo;
        $this->OnDemandDeliveryURLRequest = $OnDemandDeliveryURLRequest;
        $this->GetRateEstimates = $GetRateEstimates;
        $this->ShipmentInfo = $ShipmentInfo;
        $this->InternationalDetail = $InternationalDetail;
        $this->OnDemandDeliveryOptions = $OnDemandDeliveryOptions;
        $this->Ship = $Ship;
        $this->Packages = $Packages;
        $this->DangerousGoods = $DangerousGoods;
        $this->ShipmentNotifications = $ShipmentNotifications;
    }
}
