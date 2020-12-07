<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo\LabelOptions\{
    CustomerBarcode,
    CustomerLogo,
    DetachOptions
};

class LabelOptions
{
    const DHL_CUSTOMS_INVOICE_TYPE_COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
    const DHL_CUSTOMS_INVOICE_TYPE_PROFORMA_INVOICE = 'PROFORMA_INVOICE';

    /**
     * Resolution for X-axis and Y-axis (in DPI) for transport label and waybill document output
     *
     * Possible values:
     * + 200
     * + 300
     *
     * @var string
     */
    public $PrinterDPI;

    /**
     * Hide account number in waybill document.
     *
     * Possible values:
     * + 'Y', account number will NOT be printed on the label for both FRT and DTP account field.
     * + 'N', account number will be printed on the Waybill Document (Default)
     *
     * @var string
     */
    public $HideAccountInWaybillDocument;

    /**
     * Possible values:
     * + 'Y', Waybill document will be returned in shipment response.
     * + 'N', Waybill document will not be returned in shipment response. (Default)
     *
     * @var string
     */
    public $RequestWaybillDocument;

    /**
     * Number of copies of Waybill document printout to be generated and returned in shipment response.
     *
     * Min: 1 ; Max: 2
     *
     * @var string
     */
    public $NumberOfWaybillDocumentCopies;

    /**
     * Possible values:
     * + Y (Yes – using DHL Invoice)
     * + N (No – using Own Invoice) – (Default)
     *
     * @var string
     */
    public $RequestDHLCustomsInvoice;

    /**
     * To retrieve the language code based on customer input value.
     * The default value for this field is eng (English).
     *
     * The supported language code are as below:
     * + 'eng', English
     * + 'bul', Bugalrian
     * + 'cze', Czech
     * + 'dan', Danish
     * + 'ger', German
     * + 'gre', Greek
     * + 'est', Estonian
     * + 'fin', Finnish
     * + 'fre', French
     * + 'hun', Hungaria
     * + 'ice', Icelandic
     * + 'ita', Italian
     * + 'lit', Lithuanian
     * + 'lav', Latvian
     * + 'dut', Dutch
     * + 'nno', Norwegian
     * + 'pol', Polish
     * + 'por', Portuguse
     * + 'rum', Romanian
     * + 'rus', Russian
     * + 'slv', Slovenian
     * + 'slo', Slovak
     * + 'spa', Spanish
     *
     * @var string
     */
    public $DHLCustomsInvoiceLanguageCode;

    /**
     * The type for commercial invoice
     *
     * Possible values:
     * + 'COMMERCIAL_INVOICE' (default)
     * + 'PROFORMA_INVOICE'
     *
     * @var string
     */
    public $DHLCustomsInvoiceType;

    /**
     * Possible values:
     * + 'Y', request to generate the shipment receipt
     * + 'N', no shipment receipt generation is required (default)
     *
     * @var string
     */
    public $RequestShipmentReceipt;

    /**
     * @var CustomerLogo
     */
    public $CustomerLogo;

    /**
     * @var CustomerBarcode
     */
    public $CustomerBarcode;

    /**
     * @var DetachOptions
     */
    public $DetachOptions;

    public function __construct(
        $PrinterDPI = null,
        $HideAccountInWaybillDocument = null,
        $RequestWaybillDocument = null,
        $NumberOfWaybillDocumentCopies = null,
        $RequestDHLCustomsInvoice = null,
        $DHLCustomsInvoiceLanguageCode = null,
        $DHLCustomsInvoiceType = null,
        $RequestShipmentReceipt = null,
        CustomerLogo $CustomerLogo = null,
        CustomerBarcode $CustomerBarcode = null,
        DetachOptions $DetachOptions = null
    ) {
        $this->PrinterDPI = $PrinterDPI;
        $this->HideAccountInWaybillDocument = $HideAccountInWaybillDocument;
        $this->RequestWaybillDocument = $RequestWaybillDocument;
        $this->NumberOfWaybillDocumentCopies = $NumberOfWaybillDocumentCopies;
        $this->RequestDHLCustomsInvoice = $RequestDHLCustomsInvoice;
        $this->DHLCustomsInvoiceLanguageCode = $DHLCustomsInvoiceLanguageCode;
        $this->DHLCustomsInvoiceType = $DHLCustomsInvoiceType;
        $this->RequestShipmentReceipt = $RequestShipmentReceipt;
        $this->CustomerLogo = $CustomerLogo;
        $this->CustomerBarcode = $CustomerBarcode;
        $this->DetachOptions = $DetachOptions;
    }
}
