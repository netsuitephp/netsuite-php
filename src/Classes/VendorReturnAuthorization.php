<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2017-03-31 08:48:20 PM UTC
 */

namespace NetSuite\Classes;

class VendorReturnAuthorization extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $tranId;
    public $createdFrom;
    public $entity;
    public $orderStatus;
    public $tranDate;
    public $userTotal;
    public $currency;
    public $currencyName;
    public $billingAddress;
    public $billAddressList;
    public $memo;
    public $exchangeRate;
    public $department;
    public $class;
    public $location;
    public $subsidiary;
    public $intercoTransaction;
    public $intercoStatus;
    public $expenseList;
    public $itemList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "tranId" => "string",
        "createdFrom" => "RecordRef",
        "entity" => "RecordRef",
        "orderStatus" => "VendorReturnAuthorizationOrderStatus",
        "tranDate" => "dateTime",
        "userTotal" => "float",
        "currency" => "RecordRef",
        "currencyName" => "string",
        "billingAddress" => "Address",
        "billAddressList" => "RecordRef",
        "memo" => "string",
        "exchangeRate" => "float",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "intercoTransaction" => "RecordRef",
        "intercoStatus" => "IntercoStatus",
        "expenseList" => "VendorReturnAuthorizationExpenseList",
        "itemList" => "VendorReturnAuthorizationItemList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
