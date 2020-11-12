<?php

namespace Cubes\MyDhl\RateRequest;

class ClientDetail
{
    /**
     * For internal use
     *
     * @var string|null
     */
    public $sso;
    
    /**
     * For internal use
     *
     * @var string|null
     */
    public $plant;

    public function __construct(
        $sso = null,
        $plant = null
    ) {
        $this->sso = $sso;
        $this->plant = $plant;
    }
}
