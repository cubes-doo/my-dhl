<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo\DocumentImages;

class DocumentImage
{
    const DOCUMENT_IMAGE_TYPE_INV = 'INV';
    const DOCUMENT_IMAGE_TYPE_PNV = 'PNV';
    const DOCUMENT_IMAGE_TYPE_COO = 'COO';
    const DOCUMENT_IMAGE_TYPE_NAF = 'NAF';
    const DOCUMENT_IMAGE_TYPE_CIN = 'CIN';
    const DOCUMENT_IMAGE_TYPE_DCL = 'DCL';
    const DOCUMENT_IMAGE_TYPE_AWB = 'AWB';

    const DOCUMENT_IMAGE_FORMAT_PDF = 'PDF';
    const DOCUMENT_IMAGE_FORMAT_PNG = 'PNG';
    const DOCUMENT_IMAGE_FORMAT_TIFF = 'TIFF';
    const DOCUMENT_IMAGE_FORMAT_GIF = 'GIF';
    const DOCUMENT_IMAGE_FORMAT_JPEG = 'JPEG';

    /**
     * The type of document for the image provided
     *
     * Possible values;
     * + 'INV', Invoice
     * + 'PNV', Proforma
     * + 'COO', Certificate of Origin
     * + 'NAF', Nafta Certificate of Origin
     * + 'CIN', Commercial Invoice
     * + 'DCL', Custom Declaration
     * + 'AWB', Air Waybill and Waybill Document
     *
     * @var string
     */
    public $DocumentImageType;
    
    /**
     * The image of the document
     *
     * Base64 Binary
     *
     * @var string
     */
    public $DocumentImage;
    
    /**
     * Possible values;
     * + 'PDF'
     * + 'PNG'
     * + 'TIFF'
     * + 'GIF'
     * + 'JPEG'
     *
     * @var string
     */
    public $DocumentImageFormat;

    public function __construct(
        $DocumentImage,
        $DocumentImageType = null,
        $DocumentImageFormat = null
    ) {
        $this->DocumentImageType = $DocumentImageType;
        $this->DocumentImage = $DocumentImage;
        $this->DocumentImageFormat = $DocumentImageFormat;
    }
}
