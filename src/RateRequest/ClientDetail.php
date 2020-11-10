<?php

namespace Cubes\MyDhl\RateRequest;

class ClientDetail 
{
    public $sso;
    public $plant;

    public function __construct(
        $sso = null,
        $plant = null
    ) {
        $this->sso = $sso;
        $this->plant = $plant;
    }
}
