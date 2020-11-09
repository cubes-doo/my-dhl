<?php

namespace Cubes\MyDhl\RateRequest;

class RateRequest
{
    public $ClientDetail;
    public $Request;
    public $RequestedShipment;

    public function __construct(
        $ClientDetail,
        $Request,
        $RequestedShipment
    ) {
        $this->ClientDetail = $ClientDetail;
        $this->Request = $Request;
        $this->RequestedShipment = $RequestedShipment;
    }
}
