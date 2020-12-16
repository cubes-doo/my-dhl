# ShipmentDeleteRequest

This service allows the customer to synchronously cancel a previous successful ShipmentRequest.

Minimal usage: (may be updated at some point)

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

use Cubes\MyDhl\MyDhl;
use Cubes\MyDhl\ShipmentDeleteRequest\ShipmentDeleteRequest;

use Illuminate\Support\Carbon;

class TestController extends Controller
{
    public function dhlDeleteShipmentRequest(MyDhl $dhl)
    {
        $shippingPickupDate;
        $shippingCountryCode;
        $shippingDispatchConfirmationNumber;
        
        $deleteRequest = new ShipmentDeleteRequest(
            Carbon::parse($shippingPickupDate)->format('Y-m-d'), 
            $shippingCountryCode, 
            $shippingDispatchConfirmationNumber, 
            'John Johnson'
        );

        try {
            $response = $dhl->deleteShipmentRequest($deleteRequest);
        } catch (\Exception $e) {
            throw new \Exception(__('An error occured!'));
        }
        
        if(optional(optional($response->Notification)[0])->code != 0) {
            throw new \Exception(__('An error occured!'));
        }

        dd($response);
    }
}
```

:warning: Since this is a SOAP API SDK, classes used contain some attributes that are not required. The example above uses the bare minimum needed for the call to work. Check to see if there are any other attributes you might need/want to send as well.

:warning: Pay attention to the `ShipmentDeleteRequest.PickupDate` attribute. Its formatting is different than the usual ISO 8601, this is why it was explicitly given as the argument to Carbons format function call.