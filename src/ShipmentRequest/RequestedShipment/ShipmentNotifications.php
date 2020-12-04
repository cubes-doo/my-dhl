<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentNotifications\ShipmentNotification;

class ShipmentNotifications
{
    /**
     * @var ShipmentNotification
     */
    public $ShipmentNotification;

    public function __construct(
        ShipmentNotification $ShipmentNotification
    ) {
        $this->ShipmentNotification = $ShipmentNotification;
    }
}
