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

class ConsolidatedExchangeRate extends Record {
    /**
     * @var string
     */
    public $postingPeriod;
    /**
     * @var string
     */
    public $fromSubsidiary;
    /**
     * @var string
     */
    public $fromCurrency;
    /**
     * @var string
     */
    public $toSubsidiary;
    /**
     * @var string
     */
    public $toCurrency;
    /**
     * @var float
     */
    public $averageRate;
    /**
     * @var float
     */
    public $currentRate;
    /**
     * @var float
     */
    public $historicalRate;
    /**
     * @var string
     */
    public $accountingBook;
    /**
     * @var boolean
     */
    public $isPeriodClosed;
    /**
     * @var boolean
     */
    public $isDerived;
    /**
     * @var boolean
     */
    public $isEliminationSubsidiary;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "postingPeriod" => "string",
        "fromSubsidiary" => "string",
        "fromCurrency" => "string",
        "toSubsidiary" => "string",
        "toCurrency" => "string",
        "averageRate" => "float",
        "currentRate" => "float",
        "historicalRate" => "float",
        "accountingBook" => "string",
        "isPeriodClosed" => "boolean",
        "isDerived" => "boolean",
        "isEliminationSubsidiary" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );
}
