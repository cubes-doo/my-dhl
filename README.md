# Cubes MyDhl SDK
Unofficial SDK for the MyDHL API

[![Latest Stable Version](https://poser.pugx.org/cubes-doo/my-dhl/v/stable)](https://packagist.org/packages/cubes-doo/my-dhl) [![Total Downloads](https://poser.pugx.org/cubes-doo/my-dhl/downloads)](https://packagist.org/packages/cubes-doo/my-dhl) [![License](https://poser.pugx.org/cubes-doo/my-dhl/license)](https://packagist.org/packages/cubes-doo/my-dhl)

:warning: **Attention**! This SDK was developed to be used with Laravel and tested against the MyDHL API v1.6

## Supported Features

| Feature                 | Supported |
|-----------------------  |:---------:|
| `RateRequest`           |     ✅    |
| `ShipmentRequest`       |     ❌    |
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