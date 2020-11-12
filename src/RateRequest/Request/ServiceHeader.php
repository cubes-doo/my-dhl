<?php

namespace Cubes\MyDhl\RateRequest\Request;

class ServiceHeader
{
    /**
     * Timestamp when the request has been created. Mandatory when Landed Cost is requested.
     *
     * Format:
     * YYYY-MM-DD(T)hh:mm:ssGMTTIMEOFFSET
     *
     * Example:
     * 2010-11-24T00:17:20+01:00
     *
     * @var string
     */
    public $MessageTime;

    /**
     * Used for tracking purpose on the customer side.
     * The same ID will be returned within response per request if it is provided.
     * Mandatory when Landed Cost is requested.
     *
     * @var string
     */
    public $MessageReference;

    /**
     * Reserved for Third Party Vendors identification
     *
     * @var string|null
     */
    public $WebstorePlatform;

    /**
     * Reserved for Third Party Vendors identification
     *
     * @var string|null
     */
    public $WebstorePlatformVersion;

    /**
     * Reserved for Third Party Vendors identification
     *
     * @var string|null
     */
    public $ShippingSystemPlatform;

    /**
     * Reserved for Third Party Vendors identification
     *
     * @var string|null
     */
    public $ShippingSystemPlatformVersion;

    /**
     * Reserved for Third Party Vendors identification
     *
     * @var string|null
     */
    public $PlugIn;

    /**
     * Reserved for Third Party Vendors identification
     *
     * @var string|null
     */
    public $PlugInVersion;

    public function __construct(
        $MessageTime,
        $MessageReference,
        $WebstorePlatform = null,
        $WebstorePlatformVersion = null,
        $ShippingSystemPlatform = null,
        $ShippingSystemPlatformVersion = null,
        $PlugIn = null,
        $PlugInVersion = null
    ) {
        $this->MessageTime = $MessageTime;
        $this->MessageReference = $MessageReference;
        $this->WebstorePlatform = $WebstorePlatform;
        $this->WebstorePlatformVersion = $WebstorePlatformVersion;
        $this->ShippingSystemPlatform = $ShippingSystemPlatform;
        $this->ShippingSystemPlatformVersion = $ShippingSystemPlatformVersion;
        $this->PlugIn = $PlugIn;
        $this->PlugInVersion = $PlugInVersion;
    }
}
