<?php

$php_tag = '<?php';

return <<<PHP
$php_tag namespace Fungku\NetSuite;

use Fungku\NetSuite\Classes\AddListRequest;
use Fungku\NetSuite\Classes\AddRequest;
use Fungku\NetSuite\Classes\AsyncAddListRequest;
use Fungku\NetSuite\Classes\AsyncDeleteListRequest;
use Fungku\NetSuite\Classes\AsyncGetListRequest;
use Fungku\NetSuite\Classes\AsyncInitializeListRequest;
use Fungku\NetSuite\Classes\AsyncSearchRequest;
use Fungku\NetSuite\Classes\AsyncUpdateListRequest;
use Fungku\NetSuite\Classes\AsyncUpsertListRequest;
use Fungku\NetSuite\Classes\AttachRequest;
use Fungku\NetSuite\Classes\ChangeEmailRequest;
use Fungku\NetSuite\Classes\ChangePasswordRequest;
use Fungku\NetSuite\Classes\CheckAsyncStatusRequest;
use Fungku\NetSuite\Classes\DeleteListRequest;
use Fungku\NetSuite\Classes\DeleteRequest;
use Fungku\NetSuite\Classes\DetachRequest;
use Fungku\NetSuite\Classes\GetAllRequest;
use Fungku\NetSuite\Classes\GetAsyncResultRequest;
use Fungku\NetSuite\Classes\GetBudgetExchangeRateRequest;
use Fungku\NetSuite\Classes\GetConsolidatedExchangeRateRequest;
use Fungku\NetSuite\Classes\GetCurrencyRateRequest;
use Fungku\NetSuite\Classes\GetCustomizationIdRequest;
use Fungku\NetSuite\Classes\GetDataCenterUrlsRequest;
use Fungku\NetSuite\Classes\GetDeletedRequest;
use Fungku\NetSuite\Classes\GetItemAvailabilityRequest;
use Fungku\NetSuite\Classes\GetListRequest;
use Fungku\NetSuite\Classes\GetPostingTransactionSummaryRequest;
use Fungku\NetSuite\Classes\GetRequest;
use Fungku\NetSuite\Classes\GetSavedSearchRequest;
use Fungku\NetSuite\Classes\getSelectValueRequest;
use Fungku\NetSuite\Classes\GetServerTimeRequest;
use Fungku\NetSuite\Classes\InitializeListRequest;
use Fungku\NetSuite\Classes\InitializeRequest;
use Fungku\NetSuite\Classes\LoginRequest;
use Fungku\NetSuite\Classes\LogoutRequest;
use Fungku\NetSuite\Classes\MapSsoRequest;
use Fungku\NetSuite\Classes\SearchMoreRequest;
use Fungku\NetSuite\Classes\SearchMoreWithIdRequest;
use Fungku\NetSuite\Classes\SearchNextRequest;
use Fungku\NetSuite\Classes\SearchRequest;
use Fungku\NetSuite\Classes\SsoLoginRequest;
use Fungku\NetSuite\Classes\UpdateInviteeStatusListRequest;
use Fungku\NetSuite\Classes\UpdateInviteeStatusRequest;
use Fungku\NetSuite\Classes\UpdateListRequest;
use Fungku\NetSuite\Classes\UpdateRequest;
use Fungku\NetSuite\Classes\UpsertListRequest;
use Fungku\NetSuite\Classes\UpsertRequest;

class $serviceClass

PHP;
