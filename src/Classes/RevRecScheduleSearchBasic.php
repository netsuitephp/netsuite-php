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

class RevRecScheduleSearchBasic extends SearchRecordBasic {
    public $accountingBook;
    public $amorStatus;
    public $amortizedAmount;
    public $amorType;
    public $amount;
    public $currency;
    public $deferredAmount;
    public $destAcct;
    public $externalId;
    public $externalIdString;
    public $initialAmt;
    public $internalId;
    public $internalIdNumber;
    public $isRecognized;
    public $jeDoc;
    public $name;
    public $pctComplete;
    public $pctRecognition;
    public $periodOffset;
    public $postPeriod;
    public $schedDate;
    public $scheduleNumber;
    public $scheduleNumberText;
    public $sourceAcct;
    public $srcTranPostPeriod;
    public $srcTranType;
    public $startOffset;
    public $templateName;
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
