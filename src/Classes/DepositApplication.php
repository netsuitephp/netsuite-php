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

class DepositApplication extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $arAcct;
    public $status;
    public $customer;
    public $tranDate;
    public $postingPeriod;
    public $deposit;
    public $depDate;
    public $currency;
    public $exchangeRate;
    public $memo;
    public $subsidiary;
    public $total;
    public $department;
    public $applied;
    public $class;
    public $unapplied;
    public $location;
    public $tranId;
    public $applyList;
    public $accountingBookDetailList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "arAcct" => "RecordRef",
        "status" => "string",
        "customer" => "RecordRef",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "deposit" => "RecordRef",
        "depDate" => "dateTime",
        "currency" => "RecordRef",
        "exchangeRate" => "float",
        "memo" => "string",
        "subsidiary" => "RecordRef",
        "total" => "float",
        "department" => "RecordRef",
        "applied" => "float",
        "class" => "RecordRef",
        "unapplied" => "float",
        "location" => "RecordRef",
        "tranId" => "string",
        "applyList" => "DepositApplicationApplyList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
