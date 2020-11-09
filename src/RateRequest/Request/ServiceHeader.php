<?php

namespace Cubes\MyDhl\RateRequest\Request;

class ServiceHeader
{
    public $MessageTime;
    public $MessageReference;
    public $WebstorePlatform;
    public $WebstorePlatformVersion;
    public $ShippingSystemPlatform;
    public $ShippingSystemPlatformVersion;
    public $PlugIn;
    public $PlugInVersion;

    public function __construct(
        $MessageTime,
        $MessageReference,
        $WebstorePlatform,
        $WebstorePlatformVersion,
        $ShippingSystemPlatform,
        $ShippingSystemPlatformVersion,
        $PlugIn,
        $PlugInVersion
    ) {
        $this->MessageTime                   = $MessageTime;
        $this->MessageReference              = $MessageReference;
        $this->WebstorePlatform              = $WebstorePlatform;
        $this->WebstorePlatformVersion       = $WebstorePlatformVersion;
        $this->ShippingSystemPlatform        = $ShippingSystemPlatform;
        $this->ShippingSystemPlatformVersion = $ShippingSystemPlatformVersion;
        $this->PlugIn                        = $PlugIn;
        $this->PlugInVersion                 = $PlugInVersion;
    }
}
