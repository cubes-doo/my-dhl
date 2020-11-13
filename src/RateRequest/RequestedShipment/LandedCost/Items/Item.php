<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment\LandedCost\Items;

use Cubes\MyDhl\RateRequest\RequestedShipment\LandedCost\Items\Item\{
    AdditionalQuantityDefinition,
    GoodsCharacteristic
};

class Item
{
    /**
     * Part/ Article
     */
    const QUANTITY_TYPE_PRT = 'PRT';
    /**
     * Box
     */
    const QUANTITY_TYPE_BOX = 'BOX';

    const ITEM_WEIGHT_UNIT_OF_MEASUREMENT_SI = 'SI';
    const ITEM_WEIGHT_UNIT_OF_MEASUREMENT_SU = 'SU';

    /**
     * Line item number
     *
     * @var string
     */
    public $ItemNumber;

    /**
     * Description of the item
     *
     * @var string
     */
    public $Description;

    /**
     * Item full description
     *
     * @var string
     */
    public $Remark;

    /**
     * Country code of the goods manufacturer (ISO 3166)
     *
     * @var string
     */
    public $ManufacturingCountryCode;

    /**
     * Stock Keeping Unit number
     *
     * @var string
     */
    public $SKUPartNumber;

    /**
     * Total quantity of the item(s) to be shipped
     *
     * @var string
     */
    public $Quantity;

    /**
     * Possible values:
     *  + 'PRT' - Part/ Article
     *  + 'BOX' - Box
     *
     * @var string
     */
    public $QuantityType;

    /**
     * Product Unit price
     *
     * @var string
     */
    public $UnitPrice;

    /**
     * Currency code of the Unit Price (ISO 4217)
     *
     * @var string
     */
    public $UnitPriceCurrencyCode;

    /**
     * Not used
     *
     * @var string
     */
    public $CustomsValue;

    /**
     * Not used
     *
     * @var string
     */
    public $CustomsValueCurrencyCode;

    /**
     * HS Code identifies the item for the Import country
     * to identify the import duty rate for the item
     *
     * Can be provided with or without
     * dots.
     *
     * @var string
     */
    public $HarmonizedSystemCode;

    /**
     * Weight of the item
     *
     * @var string
     */
    public $ItemWeight;

    /**
     * Unit of measurement
     *
     * Possible values:
     * 'SI', 'SU'
     *
     * @var string
     */
    public $ItemWeightUnitofMeasurement;

    /**
     * Category of the Item
     *
     * @var string
     */
    public $Category;

    /**
     * Item’s brand
     *
     * @var string
     */
    public $Brand;

    /**
     * @var array
     */
    public $GoodsCharacteristics;

    /**
     * @var array
     */
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
