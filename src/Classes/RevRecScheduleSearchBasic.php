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

class RevRecScheduleSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $accountingBook;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $amorStatus;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $amortizedAmount;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $amorType;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $amount;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $deferredAmount;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $destAcct;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $initialAmt;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isRecognized;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $jeDoc;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $pctComplete;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $pctRecognition;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $periodOffset;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $postPeriod;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $schedDate;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $scheduleNumber;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $scheduleNumberText;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $sourceAcct;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $srcTranPostPeriod;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $srcTranType;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $startOffset;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $templateName;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $useForeignAmounts;
    static $paramtypesmap = array(
        "accountingBook" => "SearchMultiSelectField",
        "amorStatus" => "SearchEnumMultiSelectField",
        "amortizedAmount" => "SearchDoubleField",
        "amorType" => "SearchEnumMultiSelectField",
        "amount" => "SearchDoubleField",
        "currency" => "SearchMultiSelectField",
        "deferredAmount" => "SearchDoubleField",
        "destAcct" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "initialAmt" => "SearchDoubleField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isRecognized" => "SearchBooleanField",
        "jeDoc" => "SearchMultiSelectField",
        "name" => "SearchStringField",
        "pctComplete" => "SearchDoubleField",
        "pctRecognition" => "SearchDoubleField",
        "periodOffset" => "SearchLongField",
        "postPeriod" => "SearchMultiSelectField",
        "schedDate" => "SearchDateField",
        "scheduleNumber" => "SearchLongField",
        "scheduleNumberText" => "SearchStringField",
        "sourceAcct" => "SearchMultiSelectField",
        "srcTranPostPeriod" => "SearchMultiSelectField",
        "srcTranType" => "SearchMultiSelectField",
        "startOffset" => "SearchLongField",
        "templateName" => "SearchStringField",
        "useForeignAmounts" => "SearchBooleanField",
    );
}
