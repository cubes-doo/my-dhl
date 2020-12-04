<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\DangerousGoods\Content;

class DangerousGoods
{
    /**
     * @var Content
     */
    public $Content;

    public function __construct(
        Content $Content
    ) {
        $this->Content = $Content;
    }
}
