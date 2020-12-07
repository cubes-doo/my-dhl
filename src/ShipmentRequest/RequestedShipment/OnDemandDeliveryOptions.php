<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment;

class OnDemandDeliveryOptions
{
    const DELIVERY_OPTION_TV = 'TV';
    const DELIVERY_OPTION_SW = 'SW';
    const DELIVERY_OPTION_SX = 'SX';

    const LWN_TYPE_CODE_N = 'N';
    const LWN_TYPE_CODE_C = 'C';

    /**
     * The Delivery option is to define which on demand delivery option you wish to
     * choose optionally when your shipment is to be delivered.
     *
     * Possible values:
     * + 'TV'
     * + 'SW'
     * + 'SX'
     *
     * @var string
     */
    public $DeliveryOption;

    /**
     * Mandatory if DeliveryOption is 'SX' and should advise DHL where
     * exactly to leave the shipment (ie.front door etc)
     *
     * @var string
     */
    public $Location;

    /**
     * Additional information that is useful for the DHL Express courier
     *
     * @var string
     */
    public $Instructions;

    /**
     * Entry code to gain access to an apartment complex or gate
     *
     * @var string
     */
    public $GateCode;

    /**
     * Mandatory if DeliveryOption is 'SW'.
     *
     * Possible values:
     * + 'N', Leave with neighbour
     * + 'C', Leave with concierge
     *
     * @var string
     */
    public $LWNTypeCode;

    /**
     * Mandatory if DeliveryOption is 'SW' and the LWNTypeCode is 'N'
     * (Neighbour) – this is where the name of the neighbour is required
     *
     * @var string
     */
    public $NeighbourName;

    /**
     * Mandatory if DeliveryOption is 'SW' and the LWNTypeCode is 'N'
     * (Neighbour) – this is the house number of the neighbour
     *
     * @var string
     */
    public $NeighbourHouseNumber;

    /**
     * Mandatory if DeliveryOption is 'SX' or 'SW' - this is the person that this
     * authorised to sign and receive the DHL Express shipment
     *
     * @var string
     */
    public $AuthorizerName;

    /**
     * Mandatory if DeliveryOption is TV - this is the unique DHL Express Service
     * point location ID of where the parcel should be delieverd (please contact
     * your local DHL Express Account Manager to obtain the list of the servicepoint IDs)
     *
     * @var string
     */
    public $SelectedServicePointID;

    /**
     * Reserved for future use
     *
     * @var string
     */
    public $RequestedDeliveryDate;

    public function __construct(
        $DeliveryOption,
        $Location = null,
        $Instructions = null,
        $GateCode = null,
        $LWNTypeCode = null,
        $NeighbourName = null,
        $NeighbourHouseNumber = null,
        $AuthorizerName = null,
        $SelectedServicePointID = null,
        $RequestedDeliveryDate = null
    ) {
        $this->DeliveryOption = $DeliveryOption;
        $this->Location = $Location;
        $this->Instructions = $Instructions;
        $this->GateCode = $GateCode;
        $this->LWNTypeCode = $LWNTypeCode;
        $this->NeighbourName = $NeighbourName;
        $this->NeighbourHouseNumber = $NeighbourHouseNumber;
        $this->AuthorizerName = $AuthorizerName;
        $this->SelectedServicePointID = $SelectedServicePointID;
        $this->RequestedDeliveryDate = $RequestedDeliveryDate;
    }
}
