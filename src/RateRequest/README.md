# RateRequest

This service allows the customer to:

* Input characteristics about a prospective shipment, and outputs the corresponding available DHL products, along with rate estimates and estimated delivery date/time.
* Get Total Landed Cost calculation based on provided product characteristics.

Minimal usage: (may be updated at some point)

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

use Cubes\MyDhl\MyDhl;
use Cubes\MyDhl\RateRequest\Contact;
use Cubes\MyDhl\RateRequest\RateRequest;
use Cubes\MyDhl\RateRequest\Request\ServiceHeader;
use Cubes\MyDhl\RateRequest\Request;
use Cubes\MyDhl\RateRequest\RequestedShipment;
use Cubes\MyDhl\RateRequest\RequestedShipment\{
    Billing,
    Packages,
    Ship
};
use Cubes\MyDhl\RateRequest\RequestedShipment\Packages\RequestedPackage;
use Cubes\MyDhl\RateRequest\RequestedShipment\Packages\RequestedPackages\Dimensions;
use Cubes\MyDhl\RateRequest\RequestedShipment\Packages\RequestedPackages\Weight;
use Cubes\MyDhl\RateRequest\RequestedShipment\Ship\{Recipient, Shipper};

use Illuminate\Support\Carbon;

class TestController extends Controller
{
    public function dhlRateRequest(MyDhl $dhl)
    {
        $data = request()->validate([
            'customer'              => 'required|array',
            'customer.first_name'   => 'required|string|min:2|max:100',
            'customer.last_name'    => 'required|string|min:2|max:100',
            'customer.email'        => 'required|string|email',
            'customer.phone_number' => [
                'required', 
                'string', 
                'regex:/^\+?[0-9 \/\-]{1,20}$/'
            ],
            
            'delivery_address'                   => 'required|array',
            'delivery_address.country_code'      => 'required|string|max:2',
            'delivery_address.city'              => 'required|max:121|regex:/^[a-zA-Z\s]+$/',
            'delivery_address.postal_code'       => 'required|string|max:121',
            'delivery_address.street_and_number' => 'required|string|max:655',
            'delivery_address.floor'             => 'nullable|string|max:121',
            'delivery_address.flat_number'       => 'nullable|string|max:121',
        ]);

        $serviceHeader = new ServiceHeader(
            now()->toIso8601String(),
            'test'
        );
        $Request = new Request($serviceHeader);
        $Shipper = new Shipper(
            'Belgrade',
            '11000',
            'RS',
            new Contact(
                'Marko Marković',
                'Marković d.o.o.',
                '+381643333333',
                'test@test.te'
            )
        );
        $Recipient = new Recipient(
            $data['delivery_address']['city'],
            $data['delivery_address']['postal_code'],
            $data['delivery_address']['country_code'],
            new Contact(
                $data['customer']['first_name'] . ' ' . $data['customer']['last_name'],
                '',
                $data['customer']['phone_number'],
                $data['customer']['email']
            )
        );
    
        $Ship = new Ship(
            $Shipper,
            $Recipient
        );
    
        $Packages = new Packages(
            new RequestedPackage(
                new Weight(0.1),
                new Dimensions(
                    1,
                    1,
                    1
                )
            )
        );
        $Billing = new Billing(
            config('my_dhl.account_id'),
            Billing::SHIPPING_PAYMENT_TYPE_S
        );
    
        $RequestedShipment = new RequestedShipment(
            RequestedShipment::DROP_OFF_TYPE_REQUEST_COURIER,
            now()->toIso8601String(),
            RequestedShipment::UNIT_OF_MEASUREMENT_SI,
            RequestedShipment::PAYMENT_INFO_CFR,
            config('my_dhl.account_id'),
            $Ship,
            $Packages,
            $Billing
        );
    
        $rate = new RateRequest($RequestedShipment, null, $Request);

        try {
            $rateResponse = $dhl->rateRequest($rate);
        } catch (\Exception $e) {
            throw new \Exception(__('An error occured! Please check that you filled your contact & address details correctly'));
        }
        
        if(!isset(optional($rateResponse->Provider)->Service)) {
            throw new \Exception(__('An error occured! Please check that you filled your contact & address details correctly'));
        }

        // now that we have the proper response, let's see when is the soonest our package could get to the customer
        $times = collect($rateResponse->Provider->Service);

        $time = Carbon::parse($times->first()->DeliveryTime);

        // looking for the lowest date
        foreach($times as $newTime) {
            $newTime = Carbon::parse($newTime->DeliveryTime);
            if($newTime->lt($time)) {
                $time = $newTime;
            }
        }

        dd($times, $time);
    }
}
```

:warning: Since this is a SOAP API SDK, classes used contain some attributes that are not required. The example above uses the bare minimum needed for the call to work. Check to see if there are any other attributes you might need/want to send as well.
