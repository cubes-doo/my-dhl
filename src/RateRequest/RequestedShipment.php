<?php

namespace Cubes\MyDhl\RateRequest;

use Cubes\MyDhl\RateRequest\RequestedShipment\{
    Billing,
    LandedCost,
    Ship
};

class RequestedShipment
{
    public $GetRateEstimates;
    public $GetDetailedRateBreakdown;
    public $IncludeAdditionalCurrencies;
    public $DropOffType;
    public $NextBusinessDay;
    public $ShipTimestamp;
    public $PickupLocationCloseTime;
    public $UnitOfMeasurement;
    public $Content;
    public $DeclaredValue;
    public $DeclaredValueCurrecyCode;
    public $PaymentInfo;
    public $Account;
    public $PayerCountryCode;
    public $RequestValueAddedServices;
    public $ServiceType;
    public $NetworkTypeCode;
    public $CustomerAgreementInd;
    public $ValidateReadyTime;
    public $Ship;
    public $Packages;
    public $Billing;
    public $LandedCost;

    public function __construct(
        $GetRateEstimates,
        $GetDetailedRateBreakdown,
        $IncludeAdditionalCurrencies,
        $DropOffType,
        $NextBusinessDay,
        $ShipTimestamp,
        $PickupLocationCloseTime,
        $UnitOfMeasurement,
        $Content,
        $DeclaredValue,
        $DeclaredValueCurrecyCode,
        $PaymentInfo,
        $Account,
        $PayerCountryCode,
        $RequestValueAddedServices,
        $ServiceType,
        $NetworkTypeCode,
        $CustomerAgreementInd,
        $ValidateReadyTime,
        Ship $Ship,
        array $Packages,
        Billing $Billing,
        LandedCost $LandedCost
    ) {
        $this->GetRateEstimates = $GetRateEstimates;
        $this->GetDetailedRateBreakdown = $GetDetailedRateBreakdown;
        $this->IncludeAdditionalCurrencies = $IncludeAdditionalCurrencies;
        $this->DropOffType = $DropOffType;
        $this->NextBusinessDay = $NextBusinessDay;
        $this->ShipTimestamp = $ShipTimestamp;
        $this->PickupLocationCloseTime = $PickupLocationCloseTime;
        $this->UnitOfMeasurement = $UnitOfMeasurement;
        $this->Content = $Content;
        $this->DeclaredValue = $DeclaredValue;
        $this->DeclaredValueCurrecyCode = $DeclaredValueCurrecyCode;
        $this->PaymentInfo = $PaymentInfo;
        $this->Account = $Account;
        $this->PayerCountryCode = $PayerCountryCode;
        $this->RequestValueAddedServices = $RequestValueAddedServices;
        $this->ServiceType = $ServiceType;
        $this->NetworkTypeCode = $NetworkTypeCode;
        $this->CustomerAgreementInd = $CustomerAgreementInd;
        $this->ValidateReadyTime = $ValidateReadyTime;

        $this->Ship = $Ship;
        $this->Packages = $Packages;
        $this->Billing = $Billing;
        $this->LandedCost = $LandedCost;
    }
}
