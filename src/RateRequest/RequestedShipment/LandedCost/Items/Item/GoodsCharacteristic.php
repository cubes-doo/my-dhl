<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment\LandedCost\Items\Item;

class GoodsCharacteristic
{
    /**
     * Please contact Express country
     * representative to provide all
     * applicable codes
     *
     * @var string
     */
    public $CharacteristicCode;

    /**
     * Value related to the code
     *
     * @var string
     */
    public $CharacteristicValue;

    public function __construct(
        $CharacteristicCode,
        $CharacteristicValue
    ) {
        $this->CharacteristicCode = $CharacteristicCode;
        $this->CharacteristicValue = $CharacteristicValue;
    }
}
