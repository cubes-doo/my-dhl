<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo\DocumentImages\DocumentImage;

class DocumentImages
{
    /**
     * @var DocumentImage
     */
    public $DocumentImage;

    public function __construct(
        DocumentImage $DocumentImage
    ) {
        $this->DocumentImage = $DocumentImage;
    }
}
