<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\Ship\Participant\BankDetails;

class BankDetail
{
    /**
     * To be mapped in Customs Invoice - Russia Bank Name field
     *
     * @var string
     */
    public $BankName;

    /**
     * To be mapped in Customs Invoice - Russia Bank Settlement Account Number in RUR field
     *
     * @var string
     */
    public $BankSettlementAccountNumberInLocalCurrency;

    /**
     * To be mapped in Customs Invoice - Russia Bank Settlement Account Number in USD/EUR
     *
     * @var string
     */
    public $BankSettlementAccountNumberInForeignCurrency;

    public function __construct(
        $BankName = null,
        $BankSettlementAccountNumberInLocalCurrency = null,
        $BankSettlementAccountNumberInForeignCurrency = null
    ) {
        $this->BankName = $BankName;
        $this->BankSettlementAccountNumberInLocalCurrency = $BankSettlementAccountNumberInLocalCurrency;
        $this->BankSettlementAccountNumberInForeignCurrency = $BankSettlementAccountNumberInForeignCurrency;
    }
}
