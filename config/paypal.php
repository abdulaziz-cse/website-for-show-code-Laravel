<?php

return  [

    //sandbox
     'sandbox_client_id' => env('PAYPAL_SANDBOX_CLIENT_ID'),
     'sandbox_secret' => env('PAYPAL_SANDBOX_SECRET'),

      'live.client_id' => env('PAYPAL_LIVE_CLIENT_ID'),
      'live_secret' => env('PAYPAL_LIVE_SECRET'),
      
     'settings' =>[
      ///live
      'mode' =>env('PAYPAL_MODE', 'sandbox'),
      'http.ConnectionTimeOut' => 3000,

      //logs
      'log.LongEnabled' => true,
      'log.FileName' => storage_path() . 'logs/paypal.log',

      'log.LogLevel' => 'DEBUG'


  ]
];