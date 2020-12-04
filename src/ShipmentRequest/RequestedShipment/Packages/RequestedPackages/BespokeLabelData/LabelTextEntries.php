<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\Packages\RequestedPackages\BespokeLabelData;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\Packages\RequestedPackages\BespokeLabelData\LabelTextEntries\LabelTextEntry;

class LabelTextEntries
{
    /**
     * @var LabelTextEntry
     */
    public $LabelTextEntry;

    public function __construct(
        LabelTextEntry $LabelTextEntry
    ) {
        $this->LabelTextEntry = $LabelTextEntry;
    }
}
