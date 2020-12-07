<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\DangerousGoods;

class Content
{
    /**
     * Valid DHL Express Dangerous good content id
     * (please contact your DHL Express IT representative
     * for the relevant content ID code if you are shipping
     * Dangerous Goods)
     *
     * @var string
     */
    public $ContentID;

    /**
     * This is a numeric string with up to 7 char (i.e. 1000,00 or 1000.00)
     *
     * @var string
     */
    public $DryIceTotalNetWeight;

    /**
     * Comma separated UN codes – eg. "UN7843268473", "7843268473,123"
     *
     * @var string
     */
    public $UNCode;

    public function __construct(
        $ContentID,
        $DryIceTotalNetWeight = null,
        $UNCode = null
    ) {
        $this->ContentID = $ContentID;
        $this->DryIceTotalNetWeight = $DryIceTotalNetWeight;
        $this->UNCode = $UNCode;
    }
}
