<?php

namespace Cubes\MyDhl\RateRequest;

use Cubes\MyDhl\RateRequest\Request\ServiceHeader;

class Request
{
    public $ServiceHeader;

    public function __construct(
        ServiceHeader $ServiceHeader
    ) {
        $this->ServiceHeader = $ServiceHeader;
    }
}
