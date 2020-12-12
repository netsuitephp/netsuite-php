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
 * generated:  2020-12-11 06:57:10 PM PST
 */

namespace NetSuite\Classes;

class Paycheck extends Record {
    /**
     * @var string
     */
    public $batchNumber;
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var string
     */
    public $status;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var string
     */
    public $address;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $workplace;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var float
     */
    public $userAmount;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $account;
    /**
     * @var string
     */
    public $payFrequency;
    /**
     * @var float
     */
    public $balance;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $postingPeriod;
    /**
     * @var string
     */
    public $periodEnding;
    /**
     * @var \NetSuite\Classes\PaycheckPayEarnList
     */
    public $payEarnList;
    /**
     * @var \NetSuite\Classes\PaycheckPayTimeList
     */
    public $payTimeList;
    /**
     * @var \NetSuite\Classes\PaycheckPayExpList
     */
    public $payExpList;
    /**
     * @var \NetSuite\Classes\PaycheckPayPtoList
     */
    public $payPtoList;
    /**
     * @var \NetSuite\Classes\PaycheckPayDeductList
     */
    public $payDeductList;
    /**
     * @var \NetSuite\Classes\PaycheckPayContribList
     */
    public $payContribList;
    /**
     * @var \NetSuite\Classes\PaycheckPayTaxList
     */
    public $payTaxList;
    /**
     * @var \NetSuite\Classes\PaycheckPaySummaryList
     */
    public $paySummaryList;
    /**
     * @var \NetSuite\Classes\PaycheckPayDisburseList
     */
    public $payDisburseList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
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
