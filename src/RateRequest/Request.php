<?php

namespace Cubes\MyDhl\RateRequest;

use Cubes\MyDhl\RateRequest\Request\ServiceHeader;

class Request
{
    /**
     * Includes header data taken from the request
     *
     * @var ServiceHeader
     */
    public $ServiceHeader;

    public function __construct(
        ServiceHeader $ServiceHeader
    ) {
        $this->ServiceHeader = $ServiceHeader;
    }
}
