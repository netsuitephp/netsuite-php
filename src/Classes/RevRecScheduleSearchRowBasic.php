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

class RevRecScheduleSearchRowBasic extends SearchRowBasic {
    public $accountingBook;
    public $amorStatus;
    public $amorTemplate;
    public $amortizedAmount;
    public $amorType;
    public $amount;
    public $currency;
    public $deferredAmount;
    public $destAcct;
    public $externalId;
    public $initialAmt;
    public $internalId;
    public $isRecognized;
    public $jeDoc;
    public $lineSequenceNumber;
    public $name;
    public $nameUrl;
    public $pctComplete;
    public $pctRecognition;
    public $periodOffset;
    public $recurAmount;
    public $recurFxAmount;
    public $schedDate;
    public $scheduleNumber;
    public $sourceAcct;
    public $srcDocLine;
    public $srcTran;
    public $srcTranPostPeriod;
    public $startOffset;
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
