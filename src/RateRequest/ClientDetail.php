<?php

namespace Cubes\MyDhl\RateRequest;

class ClientDetail 
{
    public $sso;
    public $plant;

    public function __construct(
        $sso,
        $plant
    ) {
        $this->sso = $sso;
        $this->plant = $plant;
    }
}
