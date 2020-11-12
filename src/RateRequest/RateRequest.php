<?php

namespace Cubes\MyDhl\RateRequest;

/**
 * The Rate request will return DHL’s product capabilities (products, services and estimated delivery time)
 * and prices (where applicable) for a certain set of input data.
 */
class RateRequest
{
    /**
     * Represents Client data
     *
     * Optional node for reference use.
     *
     * @var ClientDetail|null
     */
    public $ClientDetail;
    
    /**
     * Represents HTTP Request data
     *
     * Optional node for reference use.
     *
     * @var Request|null
     */
    public $Request;

    /**
     * Used to populate all the required data about the prospect shipment to have rates returned
     *
     * Contains all critical elements.
     *
     * @var RequestedShipment
     */
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
