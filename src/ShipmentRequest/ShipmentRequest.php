<?php

namespace Cubes\MyDhl\ShipmentRequest;

/**
 * The ShipmentRequest Operation will allow you to generate an AWB number and piece IDs,
 * generate a shipping label, transmit manifest shipment detail to DHL, and optionally book a courier
 * for the pickup of a shipment.
 */
class ShipmentRequest
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
