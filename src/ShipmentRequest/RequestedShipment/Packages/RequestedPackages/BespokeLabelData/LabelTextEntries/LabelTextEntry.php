<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\Packages\RequestedPackages\BespokeLabelData\LabelTextEntries;

class LabelTextEntry
{
    /**
     * Barcode sequence number
     *
     * @var string
     */
    public $LabelNumber;

    /**
     * The caption to be printed in the tag value
     *
     * @var string
     */
    public $LabelCaption;
    
    /**
     * The value to be printed for the respective tag in caption
     *
     * eg. "SALES", "50", "CN", "SG Regional"
     *
     * @var string
     */
    public $LabelDescription;

    public function __construct(
        $LabelNumber,
        $LabelCaption,
        $LabelDescription
    ) {
        $this->LabelNumber = $LabelNumber;
        $this->LabelCaption = $LabelCaption;
        $this->LabelDescription = $LabelDescription;
    }
}
