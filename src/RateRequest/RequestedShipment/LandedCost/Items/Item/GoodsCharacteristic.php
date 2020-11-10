<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment\LandedCost\Items\Item;

class GoodsCharacteristic
{
    public $CharacteristicCode;
    public $CharacteristicValue;

    public function __construct(
        $CharacteristicCode,
        $CharacteristicValue
    ) {
        $this->CharacteristicCode = $CharacteristicCode;
        $this->CharacteristicValue = $CharacteristicValue;
    }
}
