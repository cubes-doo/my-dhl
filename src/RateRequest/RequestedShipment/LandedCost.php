<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment;

use Cubes\MyDhl\RateRequest\RequestedShipment\LandedCost\ShipmentMonetaryAmount;

class LandedCost
{
    /**
     * B2B
     */
    const SHIPMENT_PURPOSE_COMMERCIAL = 'COMMERCIAL';
    /**
     * B2C
     */
    const SHIPMENT_PURPOSE_PERSONAL = 'PERSONAL';

    const SHIPMENT_TRANSPORTATION_MODE_AIR = 'AIR';
    const SHIPMENT_TRANSPORTATION_MODE_OCEAN = 'OCEAN';
    const SHIPMENT_TRANSPORTATION_MODE_GROUND = 'GROUND';

    const MERCHANT_SELECTED_CARRIER_NAME_DHL = 'DHL';
    const MERCHANT_SELECTED_CARRIER_NAME_UPS = 'UPS';
    const MERCHANT_SELECTED_CARRIER_NAME_FEDEX = 'FEDEX';
    const MERCHANT_SELECTED_CARRIER_NAME_TNT = 'TNT';
    const MERCHANT_SELECTED_CARRIER_NAME_POST = 'POST';
    const MERCHANT_SELECTED_CARRIER_NAME_OTHERS = 'OTHERS';

    /**
     * Possible values:
     * 'Y', 'N'
     *
     * @var string
     */
    public $GetItemCostBreakdown;

    /**
     * Currency code for the item price (the product being sold)
     * and freight charge
     *
     * The Landed Cost calculation result will be returned in this defined currency.
     *
     * @var string
     */
    public $ShipmentCurrencyCode;

    /**
     * Possible values:
     *  + 'COMMERCIAL' - B2B
     *  + 'PERSONAL' - B2C
     *
     * @var string
     */
    public $ShipmentPurpose;

    /**
     * Possible value:
     *  + 'AIR'
     *  + 'OCEAN'
     *  + 'GROUND'
     *
     * @var string
     */
    public $ShipmentTransportationMode;

    /**
     * Carrier being used to ship with
     *
     * Possible values:
     * 'DHL','UPS','FEDEX','TNT','POST',
     * 'OTHERS'
     *
     * @var string
     */
    public $MerchantSelectedCarrierName;

    /**
     * @var array
     */
    public $Items;

    /**
     * @var ShipmentMonetaryAmount
     */
    public $ShipmentMonetaryAmount;

    public function __construct(
        $GetItemCostBreakdown,
        $ShipmentCurrencyCode,
        ShipmentMonetaryAmount $ShipmentMonetaryAmount,
        array $Items = [],
        $ShipmentPurpose = null,
        $ShipmentTransportationMode = null,
        $MerchantSelectedCarrierName = null
    ) {
        $this->GetItemCostBreakdown = $GetItemCostBreakdown;
        $this->ShipmentCurrencyCode = $ShipmentCurrencyCode;
        $this->ShipmentPurpose = $ShipmentPurpose;
        $this->ShipmentTransportationMode = $ShipmentTransportationMode;
        $this->MerchantSelectedCarrierName = $MerchantSelectedCarrierName;
        $this->Items = $Items;
        $this->ShipmentMonetaryAmount = $ShipmentMonetaryAmount;
    }
}
