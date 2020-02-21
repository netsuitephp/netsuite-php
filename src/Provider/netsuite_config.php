<?php

return [

    /*
    | Endpoint version.
    */
    'endpoint' => ENV('NETSUITE_HOST', '2019_1'),

    /*
    | Netsuite web services url.
    */
    'host' => ENV('NETSUITE_HOST', 'https://webservices.netsuite.com'),

    /*
    | NetSuite account being authenticated against.
    */
    'account' => ENV('NETSUITE_ACCOUNT', ''),

    /*
    | Application ID used for authentication.
    */
    'app_id' => ENV('NETSUITE_APP_ID', ''),

    /*
    | Email, password and role for email authentication.
    */
    'email' => ENV('NETSUITE_EMAIL', ''),
    'password' => ENV('NETSUITE_PASSWORD', ''),
    'role' => ENV('NETSUITE_ROLE', ''),

    /*
    | Token based authentication.
    */
    'consumerKey' => ENV('NETSUITE_CONSUMER_KEY', ''),
    'consumerSecret' => ENV('NETSUITE_CONSUMER_SECRET', ''),
    'token' => ENV('NETSUITE_TOKEN', ''),
    'tokenSecret' => ENV('NETSUITE_TOKEN_SECRET', ''),
    // Defaults to 'sha256'
    'signatureAlgorithm' => 'sha256',

    /*
    | Toggle logging.
    |
    | Optional
    */
    'logging' => true,
    'log_path' => __DIR__ . '/../storage/logs',

    'netsuite.soap_options' => [],

];
