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

class InterCompanyJournalEntry extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $postingPeriod;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $exchangeRate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var string
     */
    public $reversalDate;
    /**
     * @var boolean
     */
    public $reversalDefer;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parentExpenseAlloc;
    /**
     * @var boolean
     */
    public $isBookSpecific;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $accountingBook;
    /**
     * @var string
     */
    public $reversalEntry;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $createdFrom;
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
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $toSubsidiary;
    /**
     * @var boolean
     */
    public $approved;
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\InterCompanyJournalEntryLineList
     */
    public $lineList;
    /**
     * @var \NetSuite\Classes\InterCompanyJournalEntryAccountingBookDetailList
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
        "postingPeriod" => "RecordRef",
        "customForm" => "RecordRef",
        "tranDate" => "dateTime",
        "currency" => "RecordRef",
        "exchangeRate" => "float",
        "tranId" => "string",
        "reversalDate" => "dateTime",
        "reversalDefer" => "boolean",
        "parentExpenseAlloc" => "RecordRef",
        "isBookSpecific" => "boolean",
        "accountingBook" => "RecordRef",
        "reversalEntry" => "string",
        "createdFrom" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "memo" => "string",
        "toSubsidiary" => "RecordRef",
        "approved" => "boolean",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "lineList" => "InterCompanyJournalEntryLineList",
        "accountingBookDetailList" => "InterCompanyJournalEntryAccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
