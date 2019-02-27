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
 * generated:  2019-02-27 03:26:43 PM PST
 */

namespace NetSuite\Classes;

class Paycheck extends Record {
    public $batchNumber;
    public $createdDate;
    public $lastModifiedDate;
    public $status;
    public $entity;
    public $address;
    public $department;
    public $location;
    public $class;
    public $workplace;
    public $tranId;
    public $userAmount;
    public $memo;
    public $account;
    public $payFrequency;
    public $balance;
    public $tranDate;
    public $postingPeriod;
    public $periodEnding;
    public $payEarnList;
    public $payTimeList;
    public $payExpList;
    public $payPtoList;
    public $payDeductList;
    public $payContribList;
    public $payTaxList;
    public $paySummaryList;
    public $payDisburseList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "batchNumber" => "string",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "status" => "string",
        "entity" => "RecordRef",
        "address" => "string",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "class" => "RecordRef",
        "workplace" => "RecordRef",
        "tranId" => "string",
        "userAmount" => "float",
        "memo" => "string",
        "account" => "RecordRef",
        "payFrequency" => "string",
        "balance" => "float",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "periodEnding" => "dateTime",
        "payEarnList" => "PaycheckPayEarnList",
        "payTimeList" => "PaycheckPayTimeList",
        "payExpList" => "PaycheckPayExpList",
        "payPtoList" => "PaycheckPayPtoList",
        "payDeductList" => "PaycheckPayDeductList",
        "payContribList" => "PaycheckPayContribList",
        "payTaxList" => "PaycheckPayTaxList",
        "paySummaryList" => "PaycheckPaySummaryList",
        "payDisburseList" => "PaycheckPayDisburseList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
