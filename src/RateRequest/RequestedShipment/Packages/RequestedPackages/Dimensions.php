<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment\Packages\RequestedPackages;

class Dimensions
{
    public $Length;
    public $Width;
    public $Height;

    public function __construct(
        $Length,
        $Width,
        $Height
    ) {
        $this->Length = $Length;
        $this->Width = $Width;
        $this->Height = $Height;
    }
}
