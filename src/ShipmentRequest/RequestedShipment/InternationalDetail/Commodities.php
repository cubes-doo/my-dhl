<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail;

class Commodities
{
    /**
     * The description of the content of the shipment.
     *
     * @var string
     */
    public $Description;

    /**
     * The value which needs to be declared for customs.
     *
     * @var string
     */
    public $CustomsValue;

    /**
     * The US filing Type Value for shipments from the US
     *
     * @var string
     */
    public $USFilingTypeValue;

    public function __construct(
        $Description,
        $CustomsValue = null,
        $USFilingTypeValue = null
    ) {
        $this->Description = $Description;
        $this->CustomsValue = $CustomsValue;
        $this->USFilingTypeValue = $USFilingTypeValue;
    }
}
