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
        $ItemNumber,
        $Description,
        $Remark,
        $ManufacturingCountryCode,
        $SKUPartNumber,
        $Quantity,
        $QuantityType,
        $UnitPrice,
        $UnitPriceCurrencyCode,
        $CustomsValue,
        $CustomsValueCurrencyCode,
        $HarmonizedSystemCode,
        $ItemWeight,
        $ItemWeightUnitofMeasurement,
        $Category,
        $Brand,
        array $GoodsCharacteristics,
        array $AdditionalQuantityDefinitions
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
