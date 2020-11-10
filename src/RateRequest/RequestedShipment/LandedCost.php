<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment;

use Cubes\MyDhl\RateRequest\RequestedShipment\LandedCost\ShipmentMonetaryAmount;

class LandedCost
{
    public $GetItemCostBreakdown;
    public $ShipmentCurrencyCode;
    public $ShipmentPurpose;
    public $ShipmentTransportationMode;
    public $MerchantSelectedCarrierName;
    public $Items;
    public $ShipmentMonetaryAmount;

    public function __construct(
        $GetItemCostBreakdown,
        $ShipmentCurrencyCode,
        $ShipmentPurpose,
        $ShipmentTransportationMode,
        $MerchantSelectedCarrierName,
        array $Items,
        ShipmentMonetaryAmount $ShipmentMonetaryAmount
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
