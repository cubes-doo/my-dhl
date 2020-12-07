<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail\ExportDeclaration\InvoiceDeclarationTexts;

class InvoiceDeclarationText
{
    /**
     * Additional Declaration text maximum of 3
     *
     * @var string
     */
    public $DeclarationText;

    public function __construct(
        $DeclarationText
    ) {
        $this->DeclarationText = $DeclarationText;
    }
}
