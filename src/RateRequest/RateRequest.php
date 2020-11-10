<?php

namespace Cubes\MyDhl\RateRequest;

class RateRequest
{
    public $ClientDetail;
    public $Request;
    public $RequestedShipment;

    public function __construct(
        RequestedShipment $RequestedShipment,
        ClientDetail $ClientDetail = null,
        Request $Request = null
    ) {
        $this->ClientDetail = $ClientDetail;
        $this->Request = $Request;
        $this->RequestedShipment = $RequestedShipment;
    }
}
