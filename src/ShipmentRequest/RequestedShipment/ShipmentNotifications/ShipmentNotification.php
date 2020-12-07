<?php

namespace Cubes\MyDhl\ShipmentRequest\RequestedShipment\ShipmentNotifications;

class ShipmentNotification
{
    const LANGUAGE_CODE_ENG = 'eng';
    const LANGUAGE_CODE_ZHO = 'zho';
    const LANGUAGE_CODE_CHI = 'chi';

    const LANGUAGE_COUNTRY_CODE_CH = 'CH';
    const LANGUAGE_COUNTRY_CODE_GB = 'GB';
    const LANGUAGE_COUNTRY_CODE_US = 'US';

    /**
     * The notification method to be sent.
     * Possible values:
     * + 'EMAIL'
     *
     * @var string
     */
    public $NotificationMethod;

    /**
     * Email address of the party to receive email notification.
     *
     * @var string
     */
    public $EmailAddress;

    /**
     * Additional message to be added to the body of the mail
     *
     * @var string
     */
    public $BespokeMessage;

    /**
     * LanguageCode used in the email content
     *
     * Possible values:
     * + 'eng', British English (Default)
     * + 'zho', Chinese Traditional
     * + 'chi', Chinese Simplified
     *
     * @var string
     */
    public $LanguageCode;

    /**
     * Language country code
     *
     * Possible values:
     * + 'CH'
     * + 'GB'
     * + 'US'
     *
     * @var string
     */
    public $LanguageCountryCode;

    public function __construct(
        $NotificationMethod,
        $EmailAddress = null,
        $BespokeMessage = null,
        $LanguageCode = null,
        $LanguageCountryCode = null
    ) {
        $this->NotificationMethod = $NotificationMethod;
        $this->EmailAddress = $EmailAddress;
        $this->BespokeMessage = $BespokeMessage;
        $this->LanguageCode = $LanguageCode;
        $this->LanguageCountryCode = $LanguageCountryCode;
    }
}
