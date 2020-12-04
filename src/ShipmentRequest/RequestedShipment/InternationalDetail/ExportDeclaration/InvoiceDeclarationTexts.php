<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail\ExportDeclaration;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail\ExportDeclaration\InvoiceDeclarationTexts\InvoiceDeclarationText;

class InvoiceDeclarationTexts
{
    /**
     * @var InvoiceDeclarationText
     */
    public $InvoiceDeclarationText;

    public function __construct(
        InvoiceDeclarationText $InvoiceDeclarationText
    ) {
        $this->InvoiceDeclarationText = $InvoiceDeclarationText;
    }
}
