<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo\LabelOptions;

class CustomerLogo
{
    /**
     * The customer logo image in base64 encoding
     *
     * Supported image file format:
     * + RGB
     * + B&W, Black and White
     *
     * @var string
     */
    public $LogoImage;

    /**
     * Possible values:
     * + GIF
     * + JPEG
     * + JPG
     * + PNG
     *
     * @var string
     */
    public $LogoImageFormat;

    public function __construct(
        $LogoImage,
        $LogoImageFormat
    ) {
        $this->LogoImage = $LogoImage;
        $this->LogoImageFormat = $LogoImageFormat;
    }
}
