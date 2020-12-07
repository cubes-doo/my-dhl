<?php

return [
    'base_path' => env('MY_DHL_BASE_PATH', 'https://wsbexpress.dhl.com:443/sndpt/'),
    'username' => env('MY_DHL_USERNAME', ''),
    'password' => env('MY_DHL_PASSWORD', ''),
    'account_id' => env('MY_DHL_ACCOUNT_ID', ''),
];
