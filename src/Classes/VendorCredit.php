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

class VendorCredit extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $account;
    public $unApplied;
    public $billAddressList;
    public $autoApply;
    public $applied;
    public $transactionNumber;
    public $tranId;
    public $createdFrom;
    public $entity;
    public $total;
    public $userTotal;
    public $currency;
    public $currencyName;
    public $billingAddress;
    public $tranDate;
    public $exchangeRate;
    public $postingPeriod;
    public $memo;
    public $department;
    public $class;
    public $location;
    public $subsidiary;
    public $expenseList;
    public $itemList;
    public $applyList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "account" => "RecordRef",
        "unApplied" => "float",
        "billAddressList" => "RecordRef",
        "autoApply" => "boolean",
        "applied" => "float",
        "transactionNumber" => "string",
        "tranId" => "string",
        "createdFrom" => "RecordRef",
        "entity" => "RecordRef",
        "total" => "float",
        "userTotal" => "float",
        "currency" => "RecordRef",
        "currencyName" => "string",
        "billingAddress" => "Address",
        "tranDate" => "dateTime",
        "exchangeRate" => "float",
        "postingPeriod" => "RecordRef",
        "memo" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "expenseList" => "VendorCreditExpenseList",
        "itemList" => "VendorCreditItemList",
        "applyList" => "VendorCreditApplyList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
