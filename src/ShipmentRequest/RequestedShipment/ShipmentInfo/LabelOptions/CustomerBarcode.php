<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo\LabelOptions;

/**
 * !!! CustomerBarcode is only applicable when LabelTemplate=‘ECOM26_84CI_002’
 */
class CustomerBarcode
{
    /**
     * The customer barcode type.
     * The first barcode code type valid value is 93, 39 or 128.
     *
     * @var string
     */
    public $BarcodeType;

    /**
     * Customer barcode code
     *
     * @var string
     */
    public $BarcodeContent;

    /**
     * Customer barcode text
     *
     * @var string
     */
    public $TextBelowBarcode;

    public function __construct(
        $BarcodeType = null,
        $BarcodeContent = null,
        $TextBelowBarcode = null
    ) {
        $this->BarcodeType = $BarcodeType;
        $this->BarcodeContent = $BarcodeContent;
        $this->TextBelowBarcode = $TextBelowBarcode;
    }
}
