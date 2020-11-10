<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment\LandedCost\Items;

use Cubes\MyDhl\RateRequest\RequestedShipment\LandedCost\Items\Item\{
    AdditionalQuantityDefinition, 
    GoodsCharacteristic
};

class Item
{
    public $ItemNumber;
    public $Description;
    public $Remark;
    public $ManufacturingCountryCode;
    public $SKUPartNumber;
    public $Quantity;
    public $QuantityType;
    public $UnitPrice;
    public $UnitPriceCurrencyCode;
    public $CustomsValue;
    public $CustomsValueCurrencyCode;
    public $HarmonizedSystemCode;
    public $ItemWeight;
    public $ItemWeightUnitofMeasurement;
    public $Category;
    public $Brand;
    public $GoodsCharacteristics;
    public $AdditionalQuantityDefinitions;

    public function __construct(
        $ItemNumber = null,
        $Description = null,
        $Remark = null,
        $ManufacturingCountryCode = null,
        $SKUPartNumber = null,
        $Quantity = null,
        $QuantityType = null,
        $UnitPrice = null,
        $UnitPriceCurrencyCode = null,
        $CustomsValue = null,
        $CustomsValueCurrencyCode = null,
        $HarmonizedSystemCode = null,
        $ItemWeight = null,
        $ItemWeightUnitofMeasurement = null,
        $Category = null,
        $Brand = null,
        array $GoodsCharacteristics = null,
        array $AdditionalQuantityDefinitions = null
    ) {
        $this->ItemNumber = $ItemNumber;
        $this->Description = $Description;
        $this->Remark = $Remark;
        $this->ManufacturingCountryCode = $ManufacturingCountryCode;
        $this->SKUPartNumber = $SKUPartNumber;
        $this->Quantity = $Quantity;
        $this->QuantityType = $QuantityType;
        $this->UnitPrice = $UnitPrice;
        $this->UnitPriceCurrencyCode = $UnitPriceCurrencyCode;
        $this->CustomsValue = $CustomsValue;
        $this->CustomsValueCurrencyCode = $CustomsValueCurrencyCode;
        $this->HarmonizedSystemCode = $HarmonizedSystemCode;
        $this->ItemWeight = $ItemWeight;
        $this->ItemWeightUnitofMeasurement = $ItemWeightUnitofMeasurement;
        $this->Category = $Category;
        $this->Brand = $Brand;
        $this->GoodsCharacteristics = $GoodsCharacteristics;
        $this->AdditionalQuantityDefinitions = $AdditionalQuantityDefinitions;
    }
}
