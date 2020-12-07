<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\Packages\RequestedPackages\BespokeLabelData\LabelBarcodes;

class LabelBarcode
{
    /**
     * Barcode number
     *
     * @var string
     */
    public $BarcodeNumber;

    /**
     * The Symbology code for this barcode is 128
     *
     * @var string
     */
    public $BarcodeType;

    /**
     * Barcode content
     *
     * @var string
     */
    public $BarcodeContent;

    /**
     * Text below barcode
     *
     * @var string
     */
    public $TextBelowBarcode;

    public function __construct(
        $BarcodeNumber,
        $BarcodeContent,
        $TextBelowBarcode,
        $BarcodeType = null
    ) {
        $this->BarcodeNumber = $BarcodeNumber;
        $this->BarcodeType = $BarcodeType;
        $this->BarcodeContent = $BarcodeContent;
        $this->TextBelowBarcode = $TextBelowBarcode;
    }
}
