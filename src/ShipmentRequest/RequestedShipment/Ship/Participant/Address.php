<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\Ship\Participant;

class Address
{
    /**
     * Street name and number
     *
     * @var string
     */
    public $StreetLines;

    /**
     * Street name
     *
     * If you wish to break StreetLines
     * into Street Name and number
     * instead of using the StreetLines element.
     *
     * @var string
     */
    public $StreetName;

    /**
     * Building name
     *
     * @var string
     */
    public $BuildingName;

    /**
     * Street number
     *
     * If you wish to break StreetLines
     * into Street Name and number
     * instead of using the StreetLines element.
     *
     * @var string
     */
    public $StreetNumber;

    /**
     * Additional address information
     *
     * @var string
     */
    public $StreetLines2;

    /**
     * Additional address information
     *
     * @var string
     */
    public $StreetLines3;

    /**
     * City name
     *
     * @var string
     */
    public $City;

    /**
     * 2 letter state code for the USA only
     *
     * @var string
     */
    public $StateOrProvinceCode;

    /**
     * Postal code
     *
     * @var string
     */
    public $PostalCode;

    /**
     * 2 character codes of the Shipper country (ISO 3166)
     *
     * @var string
     */
    public $CountryCode;

    /**
     * Suburb name
     *
     * @var string
     */
    public $Suburb;

    public function __construct(
        $City,
        $PostalCode,
        $CountryCode,
        $StreetLines,
        $StreetName = null,
        $BuildingName = null,
        $StreetNumber = null,
        $StreetLines2 = null,
        $StreetLines3 = null,
        $CityDistrict = null,
        $StateOrProvinceCode = null,
        $Suburb = null
    ) {
        $this->StreetLines = $StreetLines;
        $this->StreetName = $StreetName;
        $this->BuildingName = $BuildingName;
        $this->StreetNumber = $StreetNumber;
        $this->StreetLines2 = $StreetLines2;
        $this->StreetLines3 = $StreetLines3;
        $this->City = $City;
        $this->CityDistrict = $CityDistrict;
        $this->StateOrProvinceCode = $StateOrProvinceCode;
        $this->PostalCode = $PostalCode;
        $this->CountryCode = $CountryCode;
        $this->Suburb = $Suburb;
    }
}
