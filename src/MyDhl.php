<?php


namespace Cubes\MyDhl;

use Cubes\MyDhl\RateRequest\RateRequest;
use Cubes\MyDhl\ShipmentRequest\ShipmentRequest;
use Cubes\MyDhl\ShipmentDeleteRequest\ShipmentDeleteRequest;

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
            );

        $options = null;
        if ($this->debug) {
            $options = [
                'trace' => 1,
                'exception' => 1,
            ];
        }

        $client = (new Client($this->basePath . $url . '?WSDL', $options));
        $client->__setSoapHeaders([
            $wsseHeader,
        ]);

        return $client;
    }

    protected function log(Client $client, \SoapFault $fault = null)
    {
        if (! $this->debug || ! function_exists('logger')) {
            return;
        }
        
        if (! empty($fault)) {
            logger('!!! SoapFault:');
            logger($fault->getMessage());
        }
        
        logger('$client->__getLastRequestHeaders()');
        logger($client->__getLastRequestHeaders());
        logger('$client->__getLastRequest()');
        $this->logXml($client->__getLastRequest());
        logger('$client->__getLastResponseHeaders()');
        logger($client->__getLastResponseHeaders());
        logger('$client->__getLastResponse()');
        $this->logXml($client->__getLastResponse());
    }

    protected function logXml($xml = null)
    {
        if (empty($xml)) {
            return;
        }
        
        $dom = new \DOMDocument();
        $dom->preserveWhiteSpace = false;
        $dom->loadXML($xml);
        $dom->formatOutput = true;
        logger("\n" . $dom->saveXML());
    }

    public function rateRequest(RateRequest $request)
    {
        $client = $this->make('expressRateBook');

        try {
            $res = $client->getRateRequest($request);
            $this->log($client);
        } catch (\SoapFault $s) {
            $this->log($client, $s);
            throw new \Exception('SoapFault: ' . $s->getMessage());
        }
        
        return $res;
    }

    public function shipmentRequest(ShipmentRequest $request)
    {
        $client = $this->make('expressRateBook');

        try {
            $res = $client->createShipmentRequest($request);
            $this->log($client);
        } catch (\SoapFault $s) {
            $this->log($client, $s);
            throw new \Exception('SoapFault: ' . $s->getMessage());
        }
        
        return $res;
    }

    public function deleteShipmentRequest(ShipmentDeleteRequest $request)
    {
        $client = $this->make('expressRateBook');

        try {
            $res = $client->deleteShipmentRequest($request);
            $this->log($client);
        } catch (\SoapFault $s) {
            $this->log($client, $s);
            throw new \Exception('SoapFault: ' . $s->getMessage());
        }
        
        return $res;
    }
}
