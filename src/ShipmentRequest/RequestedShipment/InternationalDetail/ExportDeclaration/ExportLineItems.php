<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail\ExportDeclaration;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail\ExportDeclaration\ExportLineItems\ExportLineItem;

class ExportLineItems
{
    /**
     * @var ExportLineItem
     */
    public $ExportLineItem;

    public function __construct(
        ExportLineItem $ExportLineItem
    ) {
        $this->ExportLineItem = $ExportLineItem;
    }
}
