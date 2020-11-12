<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment\Packages\RequestedPackages;

class Weight
{
    /**
     * Weight of the individual pieces/packages the rating request is for
     *
     * Minimum allowed weight is
     * 0.1kg - please see your DHL
     * Account rate card for more
     * information on minimum and
     * maximum weights per piece.
     *
     * @var string
     */
    public $Value;

    public function __construct($Value)
    {
        $this->Value = $Value;
    }
}
