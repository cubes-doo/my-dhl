<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment\Packages\RequestedPackages;

class Dimensions
{
    /**
     * Length of the piece listed
     *
     * @var string
     */
    public $Length;

    /**
     * Width of the piece listed
     *
     * @var string
     */
    public $Width;

    /**
     * Height of the piece listed
     *
     * @var string
     */
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
