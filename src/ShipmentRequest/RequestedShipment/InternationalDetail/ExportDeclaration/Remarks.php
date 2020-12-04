<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail\ExportDeclaration;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail\ExportDeclaration\Remarks\Remark;

class Remarks
{
    /**
     * @var Remark
     */
    public $Remark;

    public function __construct(
        Remark $Remark
    ) {
        $this->Remark = $Remark;
    }
}
