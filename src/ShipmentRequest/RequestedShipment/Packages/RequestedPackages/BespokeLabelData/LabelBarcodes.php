<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\Packages\RequestedPackages\BespokeLabelData;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\Packages\RequestedPackages\BespokeLabelData\LabelBarcodes\LabelBarcode;

class LabelBarcodes
{
    /**
     * @var LabelBarcode
     */
    public $LabelBarcode;

    public function __construct(
        LabelBarcode $LabelBarcode
    ) {
        $this->LabelBarcode = $LabelBarcode;
    }
}
