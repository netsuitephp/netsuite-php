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
 * generated:  2017-08-01 09:12:52 PM UTC
 */

namespace NetSuite\Classes;

class Deposit extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $currencyName;
    public $tranId;
    public $account;
    public $total;
    public $exchangeRate;
    public $tranDate;
    public $postingPeriod;
    public $memo;
    public $toBePrinted;
    public $subsidiary;
    public $department;
    public $class;
    public $location;
    public $paymentList;
    public $otherList;
    public $cashBackList;
    public $accountingBookDetailList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "currencyName" => "string",
        "tranId" => "string",
        "account" => "RecordRef",
        "total" => "float",
        "exchangeRate" => "float",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "memo" => "string",
        "toBePrinted" => "boolean",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "paymentList" => "DepositPaymentList",
        "otherList" => "DepositOtherList",
        "cashBackList" => "DepositCashBackList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
