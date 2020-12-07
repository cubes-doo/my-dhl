<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\Packages;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\Packages\RequestedPackages\{
    BespokeLabelData,
    Dimensions
};

class RequestedPackages
{
    const PACKAGE_TYPE_CODE_3BX = '3BX';
    const PACKAGE_TYPE_CODE_2BC = '2BC';
    const PACKAGE_TYPE_CODE_2BP = '2BP';
    const PACKAGE_TYPE_CODE_CE1 = 'CE1';
    const PACKAGE_TYPE_CODE_7BX = '7BX';
    const PACKAGE_TYPE_CODE_6BX = '6BX';
    const PACKAGE_TYPE_CODE_4BX = '4BX';
    const PACKAGE_TYPE_CODE_2BX = '2BX';
    const PACKAGE_TYPE_CODE_1CE = '1CE';
    const PACKAGE_TYPE_CODE_WB1 = 'WB1';
    const PACKAGE_TYPE_CODE_WB3 = 'WB3';
    const PACKAGE_TYPE_CODE_XPD = 'XPD';
    const PACKAGE_TYPE_CODE_8BX = '8BX';
    const PACKAGE_TYPE_CODE_5BX = '5BX';
    const PACKAGE_TYPE_CODE_WB6 = 'WB6';
    const PACKAGE_TYPE_CODE_TBL = 'TBL';
    const PACKAGE_TYPE_CODE_TBS = 'TBS';
    const PACKAGE_TYPE_CODE_WB2 = 'WB2';

    /**
     * Insurance values of the package.
     *
     * @var string
     */
    public $InsuredValue;

    /**
     * The weight of the package.
     *
     * @var string
     */
    public $Weight;

    /**
     * You can request your own Piece ID range from your DHL Express IT
     * consultant and store these locally in your integration however this is not
     * needed as if you leave this tag then DHL will automatically assign the piece ID
     * centrally.
     * In addition this special function needs to be enabled for your username by
     * your DHL Express IT Consultant.
     *
     * Possible values:
     * + 'Y', allows you to define your own PieceID in the tag below
     * + 'N', Auto-allocates the PieceID from DHL Express (Default)
     *
     * @var string
     */
    public $UseOwnPieceIdentificationNumber;

    /**
     * You can request your own Piece ID range from your DHL Express IT
     * consultant and store these locally in  your integration however this is not
     * needed as if you leave this tag then DHL will automatically assign the piece ID
     * centrally.
     * If you wish to use this function then the UseOwnPieceIdentificationNumber attribute
     * needs to be set as 'Y'.
     *
     * @var string
     */
    public $PieceIdentificationNumber;

    /**
     * This optional field allows you to provide the content description on a piece level
     * instead of Shipment level.
     *
     * @var string
     */
    public $PackageContentDescription;

    /**
     * Parent (Mother) Piece ID number.
     * This field will be used to indicate the Mother Shipment's Piece ID for linkage
     * purposes.
     *
     * @var string
     */
    public $ParentPieceIdentificationNumber;

    /**
     * Customer Reference for the piece.
     *
     * @var string
     */
    public $CustomerReferences;

    /**
     * Shipment reference type
     *
     * @var string
     */
    public $CustomerReferenceType;

    /**
     * Package type code
     *
     * Possible values:
     * + '3BX'
     * + '2BC'
     * + '2BP'
     * + 'CE1'
     * + '7BX'
     * + '6BX'
     * + '4BX'
     * + '2BX'
     * + '1CE'
     * + 'WB1'
     * + 'WB3'
     * + 'XPD'
     * + '8BX'
     * + '5BX'
     * + 'WB6'
     * + 'TBL'
     * + 'TBS'
     * + 'WB2'
     *
     * @var string
     */
    public $PackageTypeCode;

    /**
     * @var Dimensions
     */
    public $Dimensions;

    /**
     * @var BespokeLabelData
     */
    public $BespokeLabelData;

    public function __construct(
        $Weight,
        $CustomerReferences,
        Dimensions $Dimensions,
        BespokeLabelData $BespokeLabelData = null,
        $InsuredValue = null,
        $UseOwnPieceIdentificationNumber = null,
        $PieceIdentificationNumber = null,
        $PackageContentDescription = null,
        $ParentPieceIdentificationNumber = null,
        $CustomerReferenceType = null,
        $PackageTypeCode = null
    ) {
        $this->InsuredValue = $InsuredValue;
        $this->Weight = $Weight;
        $this->UseOwnPieceIdentificationNumber = $UseOwnPieceIdentificationNumber;
        $this->PieceIdentificationNumber = $PieceIdentificationNumber;
        $this->PackageContentDescription = $PackageContentDescription;
        $this->ParentPieceIdentificationNumber = $ParentPieceIdentificationNumber;
        $this->CustomerReferences = $CustomerReferences;
        $this->CustomerReferenceType = $CustomerReferenceType;
        $this->PackageTypeCode = $PackageTypeCode;
        $this->Dimensions = $Dimensions;
        $this->BespokeLabelData = $BespokeLabelData;
    }
}
