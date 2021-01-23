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

class ConsolidatedExchangeRateSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $accountingBook;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $averageRate;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $closed;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $currentRate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $fromCurrency;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $fromSubsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $historicalRate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $periodEndDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $periodName;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $periodStartDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $toCurrency;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
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
