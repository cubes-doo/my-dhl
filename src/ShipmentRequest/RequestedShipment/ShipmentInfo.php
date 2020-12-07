<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo\{
    Billing,
    DocumentImages,
    LabelOptions,
    ShipmentReferences,
    SpecialServices
};

class ShipmentInfo
{
    const DROP_OFF_TYPE_REGULAR_PICKUP = 'REGULAR_PICKUP';
    const DROP_OFF_TYPE_REQUEST_COURIER = 'REQUEST_COURIER';

    const LABEL_TYPE_PDF = 'PDF';
    const LABEL_TYPE_ZPL = 'ZPL';
    const LABEL_TYPE_EPL = 'EPL';
    const LABEL_TYPE_LP2 = 'LP2';

    const LABEL_TEMPLATE_ECOM26_84_A4_001 = 'ECOM26_84_A4_001';
    const LABEL_TEMPLATE_ECOM26_84_001 = 'ECOM26_84_001';
    const LABEL_TEMPLATE_ECOM_TC_A4 = 'ECOM_TC_A4';
    const LABEL_TEMPLATE_ECOM26_A6_002 = 'ECOM26_A6_002';
    const LABEL_TEMPLATE_ECOM26_84CI_001 = 'ECOM26_84CI_001';
    const LABEL_TEMPLATE_ECOM_A4_RU_002 = 'ECOM_A4_RU_002';
    const LABEL_TEMPLATE_ECOM26_84CI_002 = 'ECOM26_84CI_002';
    const LABEL_TEMPLATE_ECOM26_84CI_003 = 'ECOM26_84CI_003';

    const ARCHIVE_LABEL_TEMPLATE_ARCH_8X4_A4_002 = 'ARCH_8X4_A4_002';
    const ARCHIVE_LABEL_TEMPLATE_ARCH_8X4 = 'ARCH_8X4';
    const ARCHIVE_LABEL_TEMPLATE_ARCH_6X4 = 'ARCH_6X4';
    const ARCHIVE_LABEL_TEMPLATE_ARCH_A4_RU_002 = 'ARCH_A4_RU_002';

    const CUSTOMS_INVOICE_TEMPLATE_COMMERCIAL_INVOICE_03 = 'COMMERCIAL_INVOICE_03';

    const SHIPMENT_RECEIPT_TEMPLATE_SHIP_RECPT_A4_RU_002 = 'SHIP_RECPT_A4_RU_002';

    /**
     * Possible values:
     * + 'REGULAR_PICKUP', the pickup location is already served by a regular
     *      courier and an additional pickup does not need to be considered for this
     *      service
     * + 'REQUEST_COURIER', the rating response returns products for which
     *      the pickup capability is given, based on ShipmentTimeStamp.
     *
     * @var string
     */
    public $DropOffType;

    /**
     * The shipping product requested for this shipment,
     * corresponding to the DHL Global Product codes.
     *
     * @var string
     */
    public $ServiceType;

    /**
     * DHL “local / country specific” Product Code used to ship the items.
     * Important when shipping domestic products
     * – please consult your DHL Express IT consultant if needed.
     *
     * @var string
     */
    public $LocalServiceType;

    /**
     * The customer account to be used as payer in the request.
     * If this attribute is used then there is no need to populate
     * the Billing section further down below in this table as this attribute
     * will override any other accounts entered.
     * However if you do wish to charge your shipment to a third party
     * or receiver then please leave this attribute out and populate the Billing.
     *
     * @var string
     */
    public $Account;

    /**
     * The currency of the monetary values
     * presented in the request.
     *
     * @var string
     */
    public $Currency;

    /**
     * The unit of measurement for the dimensions of the package.
     *
     * Possible values:
     * + 'SI', international metric system (KG, CM)
     * + 'SU', the US system of measurement (LB, IN)
     *
     * @var string
     */
    public $UnitOfMeasurement;

    /**
     * The shipment identification number does not need
     * to be transmitted in the request as the operation will
     * assign a new number and return it in the response.
     * Only used when UseOwnShipmentdentificationNumber set to 'Y'
     * and this feature enabled within customer profile.
     *
     * @var string
     */
    public $ShipmentIdentificationNumb;

    /**
     * You can request your own AWB range from your DHL Express IT consultant and store these locally in your integration however this is not needed as if you leave this tag then DHL will automatically assign the AWB centrally. In addition this special function needs to be enabled for your username by your DHL Express IT Consultant.
     *
     * Possible values:
     * + 'Y' or 1, allows you to define your own AWB in the tag below
     * + 'N' or 0, Auto-allocates the AWB from DHL Express
     *
     * @var string
     */
    public $UseOwnShipmentIdentificationNumber;

    /**
     * Possible values:
     * + 'PDF'
     * + 'ZPL'
     * + 'EPL'
     * + 'LP2'
     *
     * @var string
     */
    public $LabelType;

    /**
     * Any valid DHL Express label template (please contact your DHL Express IT representative for a list of labels)
     * If this attribute is left blank, then the default DHL ecommerce label template will be used.
     *
     * Possible values:
     * + 'ECOM26_84_A4_001'
     * + 'ECOM26_84_001'
     * + 'ECOM_TC_A4'
     * + 'ECOM26_A6_002'
     * + 'ECOM26_84CI_001'
     * + 'ECOM_A4_RU_002'
     * + 'ECOM26_A6_002'
     * + 'ECOM26_84CI_002'
     * + 'ECOM26_84CI_003'
     *
     * @var string
     */
    public $LabelTemplate;

    /**
     * Any valid DHL Express archive label template (please contact your DHL Express IT representative for a list of labels)
     * If this attribute is left blank then the default DHL ecommerce label template will be used.
     *
     * Possible values:
     * + 'ARCH_8X4_A4_002'
     * + 'ARCH_8X4'
     * + 'ARCH_6X4'
     * + 'ARCH_A4_RU_002'
     *
     * @var string
     */
    public $ArchiveLabelTemplate;

    /**
     * Custom invoice template name.
     *
     * Possible values:
     * + 'COMMERCIAL_INVOICE_03'
     *
     * @var string
     */
    public $CustomsInvoiceTemplate;

    /**
     * Shipment receipt template name.
     *
     * Possible values:
     * + 'SHIP_RECPT_A4_RU_002'
     *
     * @var string
     */
    public $ShipmentReceiptTemplate;

    /**
     * Possible values (case sensitive):
     * + 'true'
     * + 'false'
     * + 0
     * + 1
     *
     * @var string
     */
    public $PaperlessTradeEnabled;

    /**
     * Parent (Mother) Shipment ID number used for Break Bulk Shipments (BBX)
     *
     * @var string
     */
    public $ParentShipmentIdentificationNumber;

    /**
     * Request transliteration text in response. Currently only Russian is supported.
     *
     * Possible values:
     * + 'Y', the response message will return Transliterated Value for the supported fields
     * - 'N', the response message will return as per request message field values (Default)
     *
     * @var string
     */
    public $RequestTransliterateResponse;

    /**
     * Possible values:
     * + 'Y', the response message will consists of additional field
     * + 'N', the response message will return as per request message field values (Default)
     *
     * @var string
     */
    public $RequestAdditionalInformation;

    /**
     * @var Billing
     */
    public $Billing;
    /**
     * @var DocumentImages
     */
    public $DocumentImages;
    /**
     * @var LabelOptions
     */
    public $LabelOptions;
    /**
     * @var ShipmentReferences
     */
    public $ShipmentReferences;
    /**
     * @var SpecialServices
     */
    public $SpecialServices;

    public function __construct(
        $DropOffType,
        $ServiceType,
        $Currency,
        $UnitOfMeasurement,
        Billing $Billing = null,
        DocumentImages $DocumentImages = null,
        LabelOptions $LabelOptions = null,
        ShipmentReferences $ShipmentReferences = null,
        SpecialServices $SpecialServices = null,
        $Account = null,
        $LocalServiceType = null,
        $ShipmentIdentificationNumb = null,
        $UseOwnShipmentIdentificationNumber = null,
        $LabelType = null,
        $LabelTemplate = null,
        $ArchiveLabelTemplate = null,
        $CustomsInvoiceTemplate = null,
        $ShipmentReceiptTemplate = null,
        $PaperlessTradeEnabled = null,
        $ParentShipmentIdentificationNumber = null,
        $RequestTransliterateResponse = null,
        $RequestAdditionalInformation = null
    ) {
        $this->DropOffType = $DropOffType;
        $this->ServiceType = $ServiceType;
        $this->LocalServiceType = $LocalServiceType;
        $this->Account = $Account;
        $this->Currency = $Currency;
        $this->UnitOfMeasurement = $UnitOfMeasurement;
        $this->ShipmentIdentificationNumb = $ShipmentIdentificationNumb;
        $this->UseOwnShipmentIdentificationNumber = $UseOwnShipmentIdentificationNumber;
        $this->LabelType = $LabelType;
        $this->LabelTemplate = $LabelTemplate;
        $this->ArchiveLabelTemplate = $ArchiveLabelTemplate;
        $this->CustomsInvoiceTemplate = $CustomsInvoiceTemplate;
        $this->ShipmentReceiptTemplate = $ShipmentReceiptTemplate;
        $this->PaperlessTradeEnabled = $PaperlessTradeEnabled;
        $this->ParentShipmentIdentificationNumber = $ParentShipmentIdentificationNumber;
        $this->RequestTransliterateResponse = $RequestTransliterateResponse;
        $this->RequestAdditionalInformation = $RequestAdditionalInformation;
        $this->Billing = $Billing;
        $this->DocumentImages = $DocumentImages;
        $this->LabelOptions = $LabelOptions;
        $this->ShipmentReferences = $ShipmentReferences;
        $this->SpecialServices = $SpecialServices;
    }
}
