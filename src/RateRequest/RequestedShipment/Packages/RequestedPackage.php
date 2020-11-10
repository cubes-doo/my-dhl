<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment\Packages;

use Cubes\MyDhl\RateRequest\RequestedShipment\Packages\RequestedPackages\{
    Dimensions,
    Weight
};

class RequestedPackage
{
    public $PackageTypeCode;
    public $Weight;
    public $Dimensions;

    public function __construct(
        Weight $Weight,
        Dimensions $Dimensions,
        $PackageTypeCode = null
    ) {
        $this->PackageTypeCode = $PackageTypeCode;
        $this->Weight = $Weight;
        $this->Dimensions = $Dimensions;
    }
}
