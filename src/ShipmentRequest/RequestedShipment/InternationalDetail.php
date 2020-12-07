<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail\{
    Commodities,
    ExportDeclaration
};

class InternationalDetail
{
    const CONTENT_DOCUMENTS = 'DOCUMENTS';
    const CONTENT_NON_DOCUMENTS = 'NON_DOCUMENTS';

    /**
     * Possible values:
     * + 'DOCUMENTS'
     * + 'NON_DOCUMENTS'
     *
     * @var string
     */
    public $Content;

    /**
     * @var Commodities
     */
    public $Commodities;

    /**
     * @var ExportDeclaration
     */
    public $ExportDeclaration;

    public function __construct(
        $Content,
        Commodities $Commodities,
        ExportDeclaration $ExportDeclaration = null
    ) {
        $this->Content = $Content;
        $this->Commodities = $Commodities;
        $this->ExportDeclaration = $ExportDeclaration;
    }
}
