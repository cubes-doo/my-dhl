<?php


namespace Cubes\MyDhl;

use Cubes\MyDhl\RateRequest\RateRequest;

class MyDhl
{
    protected $basePath;
    protected $username;
    protected $password;
    protected $debug;

    public function __construct(
        $basePath, 
        $username, 
        $password, 
        $debug = true
    ) {
        $this->basePath = $basePath; 
        $this->username = $username; 
        $this->password = $password; 
        $this->debug = $debug;
    }

    protected function make($url)
    {
        $wsseHeader = 
            new WsseAuthHeader(
                $this->username, 
                $this->password
            )
        ;

        $options = null;
        if($this->debug) {
            $options = [
                'trace'     => 1,
                'exception' => 1,
            ];
        }

        $client = (new \SoapClient($this->basePath . $url . '?WSDL', $options));
        $client->__setSoapHeaders([
            $wsseHeader
        ]); 

        return $client;
    }

    public function rateRequest(RateRequest $request)
    {
        $client = $this->make('expressRateBook');
        return $client->getRateRequest($request);
    }
}
