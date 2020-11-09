<?php

namespace Cubes\MyDhl\RateRequest;

class Address
{
    public $StreetLines;
    public $StreetName;
    public $StreetNumber;
    public $StreetLines2;
    public $StreetLines3;
    public $City;
    public $CityDistrict;
    public $StateOrProvinceCode;
    public $PostalCode;
    public $CountryCode;

    public function __construct(
        $StreetLines,
        $StreetName,
        $StreetNumber,
        $StreetLines2,
        $StreetLines3,
        $City,
        $CityDistrict,
        $StateOrProvinceCode,
        $PostalCode,
        $CountryCode
    ) {
        $this->StreetLines         = $StreetLines;
        $this->StreetName          = $StreetName;
        $this->StreetNumber        = $StreetNumber;
        $this->StreetLines2        = $StreetLines2;
        $this->StreetLines3        = $StreetLines3;
        $this->City                = $City;
        $this->CityDistrict        = $CityDistrict;
        $this->StateOrProvinceCode = $StateOrProvinceCode;
        $this->PostalCode          = $PostalCode;
        $this->CountryCode         = $CountryCode;
    }
}
