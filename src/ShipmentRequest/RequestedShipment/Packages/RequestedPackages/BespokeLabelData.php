<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\Packages\RequestedPackages;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\Packages\RequestedPackages\BespokeLabelData\{
    LabelBarcodes,
    LabelTextEntries
};

class BespokeLabelData
{
    /**
     * The additional customer description
     *
     * @var string
     */
    public $LabelDescription;

    /**
     * @var LabelBarcodes
     */
    public $LabelBarcodes;

    /**
     * @var LabelTextEntries
     */
    public $LabelTextEntries;

    public function __construct(
        $LabelDescription,
        LabelBarcodes $LabelBarcodes,
        LabelTextEntries $LabelTextEntries
    ) {
        $this->LabelDescription = $LabelDescription;
        $this->LabelBarcodes = $LabelBarcodes;
        $this->LabelTextEntries = $LabelTextEntries;
    }
}
