<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail\ExportDeclaration;

class InvoiceSignatureDetails
{
    /**
     * Name of signatory
     *
     * @var string
     */
    public $SignatureName;

    /**
     * Title of signatory
     *
     * @var string
     */
    public $SignatureTitle;

    /**
     * Signature image in base64 format
     * Max of size is 1 MB
     * Valid format of image are: PNG, GIF, JPEG, JPG.
     *
     * @var string
     */
    public $SignatureImage;

    public function __construct(
        $SignatureName = null,
        $SignatureTitle = null,
        $SignatureImage = null
    ) {
        $this->SignatureName = $SignatureName;
        $this->SignatureTitle = $SignatureTitle;
        $this->SignatureImage = $SignatureImage;
    }
}
