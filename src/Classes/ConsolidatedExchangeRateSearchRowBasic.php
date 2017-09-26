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

class ConsolidatedExchangeRateSearchRowBasic extends SearchRowBasic {
    public $accountingBook;
    public $averageRate;
    public $closed;
    public $currentRate;
    public $externalId;
    public $fromCurrency;
    public $fromSubsidiary;
    public $historicalRate;
    public $internalId;
    public $periodEndDate;
    public $periodName;
    public $periodStartDate;
    public $toCurrency;
    public $toSubsidiary;
    static $paramtypesmap = array(
        "accountingBook" => "SearchColumnStringField[]",
        "averageRate" => "SearchColumnStringField[]",
        "closed" => "SearchColumnBooleanField[]",
        "currentRate" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fromCurrency" => "SearchColumnStringField[]",
        "fromSubsidiary" => "SearchColumnStringField[]",
        "historicalRate" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "periodEndDate" => "SearchColumnDateField[]",
        "periodName" => "SearchColumnStringField[]",
        "periodStartDate" => "SearchColumnDateField[]",
        "toCurrency" => "SearchColumnStringField[]",
        "toSubsidiary" => "SearchColumnStringField[]",
    );
}
