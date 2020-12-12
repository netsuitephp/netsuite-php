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

class CustomTransaction extends Record {
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $tranType;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var float
     */
    public $total;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $voidJournal;
    /**
     * @var float
     */
    public $exchangeRate;
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
    public $memo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $tranStatus;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\CustomTransactionLineList
     */
    public $lineList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "tranType" => "RecordRef",
        "tranId" => "string",
        "total" => "float",
        "currency" => "RecordRef",
        "voidJournal" => "RecordRef",
        "exchangeRate" => "float",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "memo" => "string",
        "tranStatus" => "RecordRef",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "lineList" => "CustomTransactionLineList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
