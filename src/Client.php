<?php

namespace Cubes\MyDhl;

class Client extends \SoapClient
{
    public function __doRequest(
        $request,
        $location,
        $action,
        $version,
        $one_way = 0
    ) {
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $dom->preserveWhiteSpace = false;
        $dom->loadXML($request);
        $dom->formatOutput = true;
        // Go to request Node and Set the attribute
        $attr_ns = $dom->createAttribute('number');
        $attr_ns->value = 1;

        $dom
            ->getElementsByTagName('RequestedPackages')
            ->item(0)
            ->appendChild($attr_ns);

        $request = $dom->saveXML();

        return parent::__doRequest(
            $request,
            $location,
            $action,
            $version,
            $one_way
        );
    }
}
