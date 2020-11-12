<?php

namespace Cubes\MyDhl\RateRequest\RequestedShipment\Packages;

use Cubes\MyDhl\RateRequest\RequestedShipment\Packages\RequestedPackages\{
    Dimensions,
    Weight
};

class RequestedPackage
{
    /**
     * Global package type
     *
     * Please contact your DHL Express
     * representative if you wish to use a
     * DHL specific package otherwise
     * ignore this element.
     *
     * Possible values:
     *  + '3BX'
     *  + '2BC'
     *  + '2BP'
     *  + 'CE1'
     *  + '7BX'
     *  + '6BX'
     *  + '4BX'
     *  + '2BX'
     *  + '1CE'
     *  + 'WB1'
     *  + 'WB3'
     *  + 'XPD'
     *  + '8BX'
     *  + '5BX'
     *  + 'WB6'
     *  + 'TBL'
     *  + 'TBS'
     *  + 'WB2'
     *
     * @var string
     */
    public $PackageTypeCode;

    /**
     * @var Weight
     */
    public $Weight;

    /**
     * @var Dimensions
     */
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
