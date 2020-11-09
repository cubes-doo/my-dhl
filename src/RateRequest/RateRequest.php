<?php

namespace Cubes\MyDhl\RateRequest;

class RateRequest
{
    public $ClientDetail;
    public $Request;
    public $RequestedShipment;

    public function __construct(
        Request $Request,
        RequestedShipment $RequestedShipment,
        ClientDetail $ClientDetail = null
    ) {
        $this->ClientDetail = $ClientDetail;
        $this->Request = $Request;
        $this->RequestedShipment = $RequestedShipment;
    }
}
