<?php

namespace Cubes\MyDhl;

use Illuminate\Support\Facades\Facade;

class MyDhlFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'my-dhl';
    }
}
