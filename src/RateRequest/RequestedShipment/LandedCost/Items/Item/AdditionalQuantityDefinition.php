<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment\LandedCost\Items\Item;

class AdditionalQuantityDefinition
{
    /**
     * An Item's additional quantity value
     *
     * For example:
     *  + % of alcohol
     *  + % of fruit content
     *
     * @var string
     */
    public $AdditionalQuantity;

    /**
     * Item additional quantity value UOM
     *
     * @var string
     */
    public $AdditionalQuantityType;

    public function __construct(
        $AdditionalQuantity,
        $AdditionalQuantityType
    ) {
        $this->AdditionalQuantity = $AdditionalQuantity;
        $this->AdditionalQuantityType = $AdditionalQuantityType;
    }
}
