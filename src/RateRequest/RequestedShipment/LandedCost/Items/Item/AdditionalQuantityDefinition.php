<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment\LandedCost\Items\Item;

class AdditionalQuantityDefinition
{
    public $AdditionalQuantity;
    public $AdditionalQuantityType;

    public function __construct(
        $AdditionalQuantity,
        $AdditionalQuantityType
    ) {
        $this->AdditionalQuantity = $AdditionalQuantity;
        $this->AdditionalQuantityType = $AdditionalQuantityType;
    }
}
