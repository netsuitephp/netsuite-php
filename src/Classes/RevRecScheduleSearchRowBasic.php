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

class RevRecScheduleSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $accountingBook;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $amorStatus;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $amorTemplate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $amortizedAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $amorType;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $amount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $deferredAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $destAcct;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $initialAmt;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isRecognized;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $jeDoc;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $lineSequenceNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $nameUrl;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $pctComplete;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $pctRecognition;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $periodOffset;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $recurAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $recurFxAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $schedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $scheduleNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $sourceAcct;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $srcDocLine;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $srcTran;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $srcTranPostPeriod;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $startOffset;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $useForeignAmounts;
    static $paramtypesmap = array(
        "accountingBook" => "SearchColumnSelectField[]",
        "amorStatus" => "SearchColumnEnumSelectField[]",
        "amorTemplate" => "SearchColumnStringField[]",
        "amortizedAmount" => "SearchColumnDoubleField[]",
        "amorType" => "SearchColumnEnumSelectField[]",
        "amount" => "SearchColumnDoubleField[]",
        "currency" => "SearchColumnStringField[]",
        "deferredAmount" => "SearchColumnDoubleField[]",
        "destAcct" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "initialAmt" => "SearchColumnDoubleField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isRecognized" => "SearchColumnBooleanField[]",
        "jeDoc" => "SearchColumnStringField[]",
        "lineSequenceNumber" => "SearchColumnLongField[]",
        "name" => "SearchColumnStringField[]",
        "nameUrl" => "SearchColumnStringField[]",
        "pctComplete" => "SearchColumnDoubleField[]",
        "pctRecognition" => "SearchColumnDoubleField[]",
        "periodOffset" => "SearchColumnLongField[]",
        "recurAmount" => "SearchColumnDoubleField[]",
        "recurFxAmount" => "SearchColumnDoubleField[]",
        "schedDate" => "SearchColumnDateField[]",
        "scheduleNumber" => "SearchColumnStringField[]",
        "sourceAcct" => "SearchColumnStringField[]",
        "srcDocLine" => "SearchColumnStringField[]",
        "srcTran" => "SearchColumnStringField[]",
        "srcTranPostPeriod" => "SearchColumnStringField[]",
        "startOffset" => "SearchColumnLongField[]",
        "useForeignAmounts" => "SearchColumnBooleanField[]",
    );
}
