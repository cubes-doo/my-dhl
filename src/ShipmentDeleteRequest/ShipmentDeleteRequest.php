<?php

namespace Cubes\MyDhl\ShipmentDeleteRequest;

use Cubes\MyDhl\ShipmentDeleteRequest\{ClientDetail, Request};

class ShipmentDeleteRequest
{
    /**
     * The scheduled pickup date of the shipment to be deleted.
     * 
     * Format: YYYY-MMDD
     *
     * @var string
     */
    public $PickupDate;

    /**
     * The country code associated to the origin of the shipment.
     *
     * @var string
     */
    public $PickupCountry;

    /**
     * The confirmation number returned from the original shipment request.
     *
     * @var string
     */
    public $DispatchConfirmationNumber;

    /**
     * The delete requestor name
     *
     * @var string
     */
    public $RequestorName;

    /**
     * Optional reason code
     *
     * Possible values:
     * + '001', Package Not Ready
     * + '002', Rates Too High
     * + '003', Transit Time Too Slow
     * + '004', Take To Service Center or Drop Box
     * + '005', Commitment Time Not Met
     * + '006', Reason Not Given
     * + '007', Other
     * + '008', Pickup Modified
     *
     * @var string
     */
    public $Reason;

    /**
     * @var ClientDetail
     */
    public $ClientDetail;

    /**
     * @var Request
     */
    public $Request;

    public function __construct(
        $PickupDate,
        $PickupCountry,
        $DispatchConfirmationNumber,
        $RequestorName,
        $Reason = null,
        ClientDetail $ClientDetail = null,
        Request $Request = null
    ) {
        $this->PickupDate = $PickupDate;
        $this->PickupCountry = $PickupCountry;
        $this->DispatchConfirmationNumber = $DispatchConfirmationNumber;
        $this->RequestorName = $RequestorName;
        $this->Reason = $Reason;
        $this->ClientDetail = $ClientDetail;
        $this->Request = $Request;
    }
}
