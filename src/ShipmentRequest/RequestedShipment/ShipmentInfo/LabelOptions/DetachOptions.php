<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo\LabelOptions;

class DetachOptions
{
    /**
     * This field provide option to generate a single PDF
     * or thermal output image file consists of
     * Transport Label, Waybill Document, Shipment Receipt
     * and Commercial Invoice.
     * The default value is N, where a single PDF or thermal output
     * image file consists of Transport Label + Waybill Document
     * and single PDF or thermal output image file for
     * Shipment Receipt and Customs Invoice will be returned.
     *
     * @var string
     */
    public $AllInOnePDF;

    /**
     * This field provide option to generate a
     * single file consist of a single PDF or
     * thermal output image file consists of
     * Transport Label + Waybill Document,
     * a single file consist of Commercial
     * Invoice and a single file consist of
     * Shipment Receipt.
     * The default value is N, a single PDF or
     * thermal output image file consists of
     * Transport Label + Waybill Document
     * and single PDF or thermal output
     * image file for Shipment Receipt and
     * Customs Invoice will be returned.
     *
     * @var string
     */
    public $SplitShipmentReceiptAndCustomsInvoice;

    /**
     * This field provide option to generate a
     * single
     * PDF or thermal output file for the
     * Transport
     * Label, a single PDF or thermal output
     * file for the Waybill document and a
     * single file consist of Commercial
     * Invoice and Shipment Receipt.
     * The default value is N, a single PDF or
     * thermal output image file consists of
     * Transport Label + Waybill Document
     * and single PDF or thermal output
     * image file for Shipment Receipt and
     * Customs Invoice will be returned.
     *
     * @var string
     */
    public $SplitTransportLabelAndWaybillDocument;

    /**
     * This field provide option to generate a
     * single PDF or thermal output image
     * file for each pieces for Transport
     * Label and single PDF or thermal
     * output image file for Waybill
     * Document will be returned in create
     * shipment response.
     * The default value is N, a single PDF or
     * thermal output image file consists of
     * Transport Label + Waybill Document
     * and single PDF or thermal output
     * image file for Shipment Receipt and
     * Customs Invoice will be returned.
     *
     * @var string
     */
    public $SplitLabelsByPieces;

    public function __construct(
        $AllInOnePDF = null,
        $SplitShipmentReceiptAndCustomsInvoice = null,
        $SplitTransportLabelAndWaybillDocument = null,
        $SplitLabelsByPieces = null
    ) {
        $this->AllInOnePDF = $AllInOnePDF;
        $this->SplitShipmentReceiptAndCustomsInvoice = $SplitShipmentReceiptAndCustomsInvoice;
        $this->SplitTransportLabelAndWaybillDocument = $SplitTransportLabelAndWaybillDocument;
        $this->SplitLabelsByPieces = $SplitLabelsByPieces;
    }
}
