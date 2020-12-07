<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail\ExportDeclaration\ExportLineItems;

class ExportLineItem
{
    const EXPORT_REASON_TYPE_PERMANENT = 'PERMANENT';
    const EXPORT_REASON_TYPE_TEMPORARY = 'TEMPORARY';
    const EXPORT_REASON_TYPE_RETURN = 'RETURN';

    const QUANTITY_UNIT_OF_MEASUREMEN_BOX_BOXES = 'BOX Boxes';
    const QUANTITY_UNIT_OF_MEASUREMEN_2GM_CENTIGRAM = '2GM Centigram';
    const QUANTITY_UNIT_OF_MEASUREMEN_2M_CENTIMETERS = '2M Centimeters';
    const QUANTITY_UNIT_OF_MEASUREMEN_2M3_CUBIC_CENTIMETERS = '2M3 Cubic Centimeters';
    const QUANTITY_UNIT_OF_MEASUREMEN_3M3_CUBIC_FEET = '3M3 Cubic Feet';
    const QUANTITY_UNIT_OF_MEASUREMEN_M3_CUBI_METERS = 'M3 Cubic Meters';
    const QUANTITY_UNIT_OF_MEASUREMEN_DPR_DOZEN_PAIRS = 'DPR Dozen Pairs';
    const QUANTITY_UNIT_OF_MEASUREMEN_DOZ_DOZEN = 'DOZ Dozen';
    const QUANTITY_UNIT_OF_MEASUREMEN_2NO_EACH = '2NO Each';
    const QUANTITY_UNIT_OF_MEASUREMEN_PCS_PIECES = 'PCS Pieces';
    const QUANTITY_UNIT_OF_MEASUREMEN_GM_GRAMS = 'GM Grams';
    const QUANTITY_UNIT_OF_MEASUREMEN_GRS_GROSS = 'GRS Gross';
    const QUANTITY_UNIT_OF_MEASUREMEN_KG_KILOGRAMS = 'KG Kilograms';
    const QUANTITY_UNIT_OF_MEASUREMEN_LITERS = 'Liters';
    const QUANTITY_UNIT_OF_MEASUREMEN_METERS = 'Meters';
    const QUANTITY_UNIT_OF_MEASUREMEN_3GM_MILLIGRAMS = '3GM Milligrams';
    const QUANTITY_UNIT_OF_MEASUREMEN_3L_MILLILITERS = '3L Milliliters';
    const QUANTITY_UNIT_OF_MEASUREMEN_X_NO_UNIT_REQUIRED = 'X No Unit Required';
    const QUANTITY_UNIT_OF_MEASUREMEN_NO_NUMBER = 'NO Number';
    const QUANTITY_UNIT_OF_MEASUREMEN_2KG_OUNCES = '2KG Ounces';
    const QUANTITY_UNIT_OF_MEASUREMEN_PRS_PAIRS = 'PRS Pairs';
    const QUANTITY_UNIT_OF_MEASUREMEN_2L_GALLONS = '2L Gallons';
    const QUANTITY_UNIT_OF_MEASUREMEN_3KG_POUNDS = '3KG Pounds';
    const QUANTITY_UNIT_OF_MEASUREMEN_CM2_SQUARE_CENTIMETERS = 'CM2 Square Centimeters';
    const QUANTITY_UNIT_OF_MEASUREMEN_2M2_SQUARE_FEET = '2M2 Square Feet';
    const QUANTITY_UNIT_OF_MEASUREMEN_3M2_SQUARE_INCHES = '3M2 Square Inches';
    const QUANTITY_UNIT_OF_MEASUREMEN_M2_SQUARE_METERS = 'M2 Square Meters';
    const QUANTITY_UNIT_OF_MEASUREMEN_4M2_SQUARE_YARDS = '4M2 Square Yards';
    const QUANTITY_UNIT_OF_MEASUREMEN_3M_YARDS = '3M Yards';

    /**
     * Commodity code for the shipment at item line level
     *
     * @var string
     */
    public $CommodityCode;

    /**
     * ECCN (Export Control ClassificationNumber) info
     *
     * This is required for EEI filing US country usage.
     *
     * @var string
     */
    public $ECCN;

    /**
     * Possible values:
     * + 'PERMANENT'
     * + 'TEMPORARY'
     * + 'RETURN'
     *
     * @var string
     */
    public $ExportReasonType;

    /**
     * Serial number for the items
     *
     * @var string
     */
    public $ItemNumber;

    /**
     * Number of pieces of a particular line item
     *
     * @var string
     */
    public $Quantity;

    /**
     * The quantity unit of measurement
     *
     * Possible values:
     * + 'BOX Boxes'
     * + '2GM Centigram'
     * + '2M Centimeters'
     * + '2M3 Cubic Centimeters'
     * + '3M3 Cubic Feet'
     * + 'M3 Cubic Meters'
     * + 'DPR Dozen Pairs'
     * + 'DOZ Dozen'
     * + '2NO Each'
     * + 'PCS Pieces'
     * + 'GM Grams'
     * + 'GRS Gross'
     * + 'KG Kilograms'
     * + 'Liters'
     * + 'Meters'
     * + '3GM Milligrams'
     * + '3L Milliliters'
     * + 'X No Unit Required'
     * + 'NO Number'
     * + '2KG Ounces'
     * + 'PRS Pairs'
     * + '2L Gallons'
     * + '3KG Pounds'
     * + 'CM2 Square Centimeters'
     * + '2M2 Square Feet'
     * + '3M2 Square Inches'
     * + 'M2 Square Meters'
     * + '4M2 Square Yards'
     * + '3M Yards'
     *
     * @var string
     */
    public $QuantityUnitOfMeasuremen;

    /**
     * The description of the line item
     *
     * @var string
     */
    public $ItemDescription;

    /**
     * Monetary value of each line item
     *
     * @var string
     */
    public $UnitPrice;

    /**
     * Net weight of the line item
     *
     * @var string
     */
    public $NetWeight;

    /**
     * Gross weight of the line item
     *
     * @var string
     */
    public $GrossWeight;

    /**
     * Manufacturing ISO country code
     *
     * @var string
     */
    public $ManufacturingCountryCode;

    /**
     * TaxesPaid if set to N. The default is N
     *
     * Possible values:
     * + 'Y'
     * + 'N'
     *
     * @var string
     */
    public $TaxesPaid;

    public function __construct(
        $ItemNumber,
        $Quantity,
        $QuantityUnitOfMeasuremen,
        $ItemDescription,
        $UnitPrice,
        $NetWeight,
        $GrossWeight,
        $CommodityCode = null,
        $ECCN = null,
        $ExportReasonType = null,
        $ManufacturingCountryCode = null,
        $TaxesPaid = null
    ) {
        $this->CommodityCode = $CommodityCode;
        $this->ECCN = $ECCN;
        $this->ExportReasonType = $ExportReasonType;
        $this->ItemNumber = $ItemNumber;
        $this->Quantity = $Quantity;
        $this->QuantityUnitOfMeasuremen = $QuantityUnitOfMeasuremen;
        $this->ItemDescription = $ItemDescription;
        $this->UnitPrice = $UnitPrice;
        $this->NetWeight = $NetWeight;
        $this->GrossWeight = $GrossWeight;
        $this->ManufacturingCountryCode = $ManufacturingCountryCode;
        $this->TaxesPaid = $TaxesPaid;
    }
}
