<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail\ExportDeclaration\Remarks;

class Remark
{
    /**
     * Custom Invoice's Remarks Description maximum of 3
     *
     * @var string
     */
    public $RemarkDescription;

    public function __construct(
        $RemarkDescription
    ) {
        $this->RemarkDescription = $RemarkDescription;
    }
}
