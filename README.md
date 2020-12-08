# Cubes MyDhl SDK
Unofficial SDK for the MyDHL API

[![Latest Stable Version](https://poser.pugx.org/cubes-doo/my-dhl/v/stable)](https://packagist.org/packages/cubes-doo/my-dhl) [![Total Downloads](https://poser.pugx.org/cubes-doo/my-dhl/downloads)](https://packagist.org/packages/cubes-doo/my-dhl) [![License](https://poser.pugx.org/cubes-doo/my-dhl/license)](https://packagist.org/packages/cubes-doo/my-dhl)

:warning: **Attention**! This SDK was developed to be used with Laravel and tested against the MyDHL API v1.6

## Supported Features

| Feature                 | Supported |
|-----------------------  |:---------:|
| `RateRequest`           |     ✅    |
| `ShipmentRequest`       |     ✅    |
| `ShipmentDeleteRequest` |     ❌    |
| `TrackingRequest`       |     ❌    |
| `DocumentRetrieve`      |     ❌    |
| `updateShipment`        |     ❌    |
| `requestPickup`         |     ❌    |
| `updatePickup`          |     ❌    |

## Installation

Require this package with composer.

```shell
composer require cubes-doo/my-dhl
```

## Index of examples for supported features:

1. [RateRequest](src/RateRequest/README.md)
1. [ShipmentRequest](src/ShipmentRequest/README.md)

:warning: **Things to keep in mind in general**:

- this is an SDK for a SOAP API; There are a lot of simple classes that only have attributes and constructors - this is so that we could better define what DHL's API expects as arguments; It might be tedious, but this is why examples are provided for every one of the supported API calls
- if you see a datetime attribute, it should usually be filled w/ a date-time string in the format `YYYY-MM-DDTHH:MM:SSGMT+k`; This format corresponds w/ the ISO 8601 standard; Luckly Carbon's got your back; It is highly reccomended you use Carbon's `toIso8601String()` method, like so: `now()->toIso8601String()` to populate these attributes
- some attributes will have a docblock like this: 
    ```php
        /**
         * Possible values:
         * + 'Y' or 1, ...
         * ...
         * + 'N' or 0, ...
         */
    ```
    avoid mixing these two options. If you want, use 'y'/'n' on all such attributes, or stick to 1/0 instead. No constants are provided for these, because they are self explanatory, one character values.
