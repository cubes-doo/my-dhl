<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail\ExportDeclaration\{
    ExportLineItems,
    InvoiceDeclarationTexts,
    InvoiceSignatureDetails,
    OtherCharges,
    Remarks
};

class ExportDeclaration
{
    /**
     * Destination port details
     *
     * @var string
     */
    public $DestinationPort;

    /**
     * Exporter Code
     *
     * @var string
     */
    public $ExporterCode;

    /**
     * Exporter ID
     *
     * @var string
     */
    public $ExporterID;

    /**
     * Export license info
     *
     * @var string
     */
    public $ExportLicense;

    /**
     * Export Reason
     *
     * @var string
     */
    public $ExportReason;

    /**
     * Consignee import license
     *
     * @var string
     */
    public $ImportLicense;

    /**
     * Invoice date
     * This field is mandatory when RequestDHLCustomsInvoice = 'Y'.
     *
     * @var string
     */
    public $InvoiceDate;

    /**
     * Invoice number
     * This field is mandatory when RequestDHLCustomsInvoice = 'Y'.
     *
     * @var string
     */
    public $InvoiceNumber;

    /**
     * Package marks
     *
     * @var string
     */
    public $PackageMarks;

    /**
     * Payer GST VAT details
     *
     * @var string
     */
    public $PayerGSTVAT;

    /**
     * Recipient reference
     *
     * @var string
     */
    public $RecipientReference;

    /**
     * Terms of payment
     *
     * @var string
     */
    public $TermsOfPayment;

    /**
     * @var Remarks
     */
    public $Remarks;

    /**
     * @var OtherCharges
     */
    public $OtherCharges;

    /**
     * @var InvoiceSignatureDetails
     */
    public $InvoiceSignatureDetails;

    /**
     * @var InvoiceDeclarationTexts
     */
    public $InvoiceDeclarationTexts;

    /**
     * @var ExportLineItems
     */
    public $ExportLineItems;

    public function __construct(
        Remarks $Remarks,
        OtherCharges $OtherCharges,
        InvoiceSignatureDetails $InvoiceSignatureDetails,
        InvoiceDeclarationTexts $InvoiceDeclarationTexts,
        ExportLineItems $ExportLineItems,
        $DestinationPort = null,
        $ExporterCode = null,
        $ExporterID = null,
        $ExportLicense = null,
        $ExportReason = null,
        $ImportLicense = null,
        $InvoiceDate = null,
        $InvoiceNumber = null,
        $PackageMarks = null,
        $PayerGSTVAT = null,
        $RecipientReference = null,
        $TermsOfPayment = null
    ) {
        $this->DestinationPort = $DestinationPort;
        $this->ExporterCode = $ExporterCode;
        $this->ExporterID = $ExporterID;
        $this->ExportLicense = $ExportLicense;
        $this->ExportReason = $ExportReason;
        $this->ImportLicense = $ImportLicense;
        $this->InvoiceDate = $InvoiceDate;
        $this->InvoiceNumber = $InvoiceNumber;
        $this->PackageMarks = $PackageMarks;
        $this->PayerGSTVAT = $PayerGSTVAT;
        $this->RecipientReference = $RecipientReference;
        $this->TermsOfPayment = $TermsOfPayment;
        $this->Remarks = $Remarks;
        $this->OtherCharges = $OtherCharges;
        $this->InvoiceSignatureDetails = $InvoiceSignatureDetails;
        $this->InvoiceDeclarationTexts = $InvoiceDeclarationTexts;
        $this->ExportLineItems = $ExportLineItems;
    }
}
