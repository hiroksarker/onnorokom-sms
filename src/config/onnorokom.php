<?php


return [

    /*
    |--------------------------------------------------------------------------
    | OnnoRokom ApiKey
    |--------------------------------------------------------------------------
    |
    | ApiKey that you will get by sms.
    |
    */

    'apikey' => env('ONNOROKOM_API_KEY', ''),
    
    /*
    |--------------------------------------------------------------------------
    | Type
    |--------------------------------------------------------------------------
    |
    | SMS format Text or Ucs
    |
    */

    'type' => env('ONNOROKOM_SMS_TYPE', 'TEXT'),

    /*
    |--------------------------------------------------------------------------
    | Delivery Type
    |--------------------------------------------------------------------------
    |
    | OneToOne - Single Sms Send Method
    | OneToOneBulk - Each and every number contains individual message
    | OneToMany - Bulk Sms Method
    |
    */

    'delivery_type' => env('ONNOROKOM_DELIVERY_TYPE', 'NumberSms'),

    /*
    |--------------------------------------------------------------------------
    | Mask Name
    |--------------------------------------------------------------------------
    |
    | Mask Name which is allowed to your client panel
    |
    */

    'mask_name' => env('ONNOROKOM_MASK_NAME', ''),
    /*
    |--------------------------------------------------------------------------
    |Campaign
    |--------------------------------------------------------------------------
    |
    | Campaign Name
    |
    */

    'campaign_name' => env('ONNOROKOM_CAMPAIGN', ''),

];
