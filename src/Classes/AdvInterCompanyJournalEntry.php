<?php
/**
 * This file is part of the netsuitephp/netsuite-php library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/netsuitephp/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/netsuitephp/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 */

namespace NetSuite\Classes;

class AdvInterCompanyJournalEntry extends Record {
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
     * @var boolean
     */
    public $performAutoBalance;
    /**
     * @var \NetSuite\Classes\AdvInterCompanyJournalEntryLineList
     */
    public $lineList;
    /**
     * @var \NetSuite\Classes\AdvInterCompanyJournalEntryAccountingBookDetailList
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
        "approved" => "boolean",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "performAutoBalance" => "boolean",
        "lineList" => "AdvInterCompanyJournalEntryLineList",
        "accountingBookDetailList" => "AdvInterCompanyJournalEntryAccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
