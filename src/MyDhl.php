<?php

namespace Cubes\MyDhl;

use CodeDredd\Soap\Facades\Soap;

class MyDhl
{
    protected $client;

    public function __construct($basePath, $username, $password) 
    {
        $this->client = Soap::baseWsdl($basePath)->withWsse([
            'userTokenName' => $username,
            'userTokenPassword' => $password,
        ]);
    }
}
