# ShipmentRequest

This service allows the customer to: 

* generate an AWB number and piece IDs
* generate a shipping label
* transmit manifest shipment detail to DHL
* book a courier for the pickup of a shipment

Minimal usage: (may be updated at some point)

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

use Cubes\MyDhl\MyDhl;
use Cubes\MyDhl\ShipmentRequest\RequestedShipment;
use Cubes\MyDhl\ShipmentRequest\ShipmentRequest;
use Cubes\MyDhl\ShipmentRequest\RequestedShipment\{
    ShipmentInfo,
    InternationalDetail,
    Ship,
    Packages
};

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentInfo\Billing;

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\InternationalDetail\{
    Commodities
};

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\Ship\{
    Shipper,
    Recipient
};

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\Ship\Participant\{
    Contact,
    Address
};

use Cubes\MyDhl\ShipmentRequest\RequestedShipment\Packages\RequestedPackages;
use Cubes\MyDhl\ShipmentRequest\RequestedShipment\Packages\RequestedPackages\{
    Dimensions
};

use Illuminate\Support\Carbon;

class TestController extends Controller
{
    public function dhlShipmentRequest(MyDhl $dhl)
    {
        $ShipmentInfo = new ShipmentInfo(
            ShipmentInfo::DROP_OFF_TYPE_REQUEST_COURIER,
            'U',
            'EUR',
            'SI',
            new Billing('S')
        );

        $Commodities = new Commodities('test');

        $InternationalDetail = new InternationalDetail(
            InternationalDetail::CONTENT_NON_DOCUMENTS,
            $Commodities
        );

        $Shipper = new Shipper(
            new Contact(
                'John Smith',
                'DHL',
                '+381666666666'
            ),
            new Address(
                'Prague',
                '14800',
                'CZ',
                'V Parku 2308/10'
            )
        );
        $Recipient = new Recipient(
            new Contact(
                'Jane Smith',
                'DHL',
                '+381666666666'
            ),
            new Address(
                'Firenze',
                '50127',
                'IT',
                'Via Felice Matteucci 2'
            )
        );

        $Ship = new Ship(
            $Shipper,
            $Recipient
        );
        $Packages = new Packages(
            new RequestedPackages(
                '1',
                'TEST CZ-IT',
                new Dimensions(1, 1, 1),
            )
        );

        $RequestedShipment = new RequestedShipment(
            // now()->toIso8601String(), // not the right format for this param...
            now()->format('Y-m-d\TH:i:s \G\M\TP'),
            RequestedShipment::PAYMENT_INFO_CFR,
            $ShipmentInfo,
            $InternationalDetail,
            $Ship,
            $Packages
        );

        $shipmentRequest = new ShipmentRequest($RequestedShipment);

        $shipment = $dhl->shipmentRequest($shipmentRequest);

        dd($shipment);
    }
}
```

:warning: Since this is a SOAP API SDK, classes used contain some attributes that are not required. The example above uses the bare minimum needed for the call to work. Check to see if there are any other attributes you might need/want to send as well.

:warning: Pay attention to the `RequestedShipment.ShipTimestamp` attribute. Its formatting is different than the usual ISO 8601, this is why it was explicitly given as the argument to Carbons format function call.