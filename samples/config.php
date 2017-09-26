<?php

// An example of loading your config from environment variables with optional defaults.
return array(
    'endpoint' => getenv('NETSUITE_ENDPOINT') ?: '2017_1',
    'host'     => getenv('NETSUITE_HOST')     ?: 'https://webservices.netsuite.com',
    'email'    => getenv('NETSUITE_EMAIL')    ?: 'jDoe@netsuite.com',
    'password' => getenv('NETSUITE_PASSWORD') ?: 'mySecretPwd',
    'role'     => getenv('NETSUITE_ROLE')     ?: '3',
    'account'  => getenv('NETSUITE_ACCOUNT')  ?: 'MYACCT1',
    'appid'    => getenv('NETSUITE_APP_ID')   ?: '4AD027CA-88B3-46EC-9D3E-41C6E6A325E2',
    'logging'  => getenv('NETSUITE_LOGGING')  ?: false,
    'log_path' => getenv('NETSUITE_LOG_PATH') ?: '',
);
