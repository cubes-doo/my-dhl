<?php


namespace Cubes\MyDhl;

use Cubes\MyDhl\RateRequest\RateRequest;

class MyDhl
{
    public $client;

    public function __construct($basePath, $username, $password) 
    {
        $wsseHeader = new WsseAuthHeader($username, $password);

        $this->client = (new \SoapClient($basePath));
        $this->client->__setSoapHeaders([
            $wsseHeader
        ]);
    }

    public function rateRequest(RateRequest $request)
    {
        return $this->client->RateRequest($request);
    }
}
