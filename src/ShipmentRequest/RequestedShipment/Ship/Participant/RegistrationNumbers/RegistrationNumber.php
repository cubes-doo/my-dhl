<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\Ship\Participant\RegistrationNumbers;

class RegistrationNumber
{
    const NUMBER_TYPE_CODE_VAT = 'VAT';
    const NUMBER_TYPE_CODE_EIN = 'EIN';
    const NUMBER_TYPE_CODE_GST = 'GST';
    const NUMBER_TYPE_CODE_SSN = 'SSN';
    const NUMBER_TYPE_CODE_EOR = 'EOR';
    const NUMBER_TYPE_CODE_DUN = 'DUN';
    const NUMBER_TYPE_CODE_FED = 'FED';
    const NUMBER_TYPE_CODE_STA = 'STA';
    const NUMBER_TYPE_CODE_CNP = 'CNP';
    const NUMBER_TYPE_CODE_IE = 'IE';
    const NUMBER_TYPE_CODE_INN = 'INN';
    const NUMBER_TYPE_CODE_KPP = 'KPP';
    const NUMBER_TYPE_CODE_OGR = 'OGR';
    const NUMBER_TYPE_CODE_OGRN = 'OGRN';
    const NUMBER_TYPE_CODE_OKP = 'OKP';
    const NUMBER_TYPE_CODE_OKPO = 'OKPO';
    const NUMBER_TYPE_CODE_MRN = 'MRN';
    const NUMBER_TYPE_CODE_OSR = 'OSR';

    /**
     * Registration Number of the Shipper.
     *
     * @var string
     */
    public $Number;

    /**
     * Type of the registration number.
     *
     * Possible values:
     * + 'VAT', Value-Added tax
     * + 'EIN', Employer Identifiaction Number
     * + 'GST', Goods and Service Tax
     * + 'SSN', Social Secutiry Number
     * + 'EOR', European Union Registration and Identification
     * + 'DUN', Data Universal Numberin System
     * + 'FED', Federal Tax ID
     * + 'STA', State Tax ID
     * + 'CNP', Brazil CNPJ/CPF Federal Tax
     * + 'IE', Brazil type IE/RG Federal Tax
     * + 'INN', Russia bank details section
     * + 'KPP', Russia bank details section
     * + 'OGR', Russia bank details section
     * + 'OGRN'
     * + 'OKP', Russia bank details section
     * + 'OKPO'
     * + 'MRN', Germany Movement Reference Number
     * + 'OSR', Overseas Registered Supplier GST number
     *
     * @var string
     */
    public $NumberTypeCode;

    /**
     * ISO 2 character code of the country where
     * the Registration Number has been issued by.
     *
     * @var string
     */
    public $NumberIssuerCountryCode;

    public function __construct(
        $Number,
        $NumberTypeCode,
        $NumberIssuerCountryCode
    ) {
        $this->Number = $Number;
        $this->NumberTypeCode = $NumberTypeCode;
        $this->NumberIssuerCountryCode = $NumberIssuerCountryCode;
    }
}
