<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo\ShipmentReferences;

class ShipmentReference
{
    const SHIPMENT_REFERENCE_TYPE_AAO = 'AAO';
    const SHIPMENT_REFERENCE_TYPE_CU = 'CU';
    const SHIPMENT_REFERENCE_TYPE_FF = 'FF';
    const SHIPMENT_REFERENCE_TYPE_FN = 'FN';
    const SHIPMENT_REFERENCE_TYPE_IBC = 'IBC';
    const SHIPMENT_REFERENCE_TYPE_OBC = 'OBC';
    const SHIPMENT_REFERENCE_TYPE_PRN = 'PRN';
    const SHIPMENT_REFERENCE_TYPE_ACP = 'ACP';
    const SHIPMENT_REFERENCE_TYPE_ACS = 'ACS';
    const SHIPMENT_REFERENCE_TYPE_ACR = 'ACR';
    const SHIPMENT_REFERENCE_TYPE_CDN = 'CDN';
    const SHIPMENT_REFERENCE_TYPE_STD = 'STD';
    const SHIPMENT_REFERENCE_TYPE_CO = 'CO';

    /**
     * Shipment reference number
     *
     * @var string
     */
    public $ShipmentReference;

    /**
     * Shipment Reference Type code
     * Possible values;
     * + 'AAO', shipment reference number of receiver
     * + 'CU', reference number of consignor
     * + 'FF', reference number of freight forwarder
     * + 'FN', freight bill number for <ex works invoice number>
     * + 'IBC', inbound center reference number LLR, load list reference for <10-digit Shipment ID>
     * + 'OBC', outbound center reference number for <SHIPMEN IDENTIFIER (COUNTRY OF ORIGIN)>
     * + 'PRN', pickup request number for <BOOKING REFERENCE NUMBER>
     * + 'ACP', local payer account number
     * + 'ACS', local shipper account number
     * + 'ACR', local receiver account number
     * + 'CDN', customs declaration number
     * + 'STD', eurolog 15-digit shipment id
     * + 'CO', buyers order number
     *
     * @var string
     */
    public $ShipmentReferenceType;

    public function __construct(
        $ShipmentReference,
        $ShipmentReferenceType = null
    ) {
        $this->ShipmentReference = $ShipmentReference;
        $this->ShipmentReferenceType = $ShipmentReferenceType;
    }
}
