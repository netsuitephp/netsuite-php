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

class ItemAccountingBookDetail {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $accountingBook;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $createRevenuePlansOn;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revenueRecognitionRule;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revRecForecastRule;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revRecSchedule;
    /**
     * @var boolean
     */
    public $sameAsPrimaryRevRec;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $amortizationTemplate;
    /**
     * @var boolean
     */
    public $sameAsPrimaryAmortization;
    static $paramtypesmap = array(
        "accountingBook" => "RecordRef",
        "createRevenuePlansOn" => "RecordRef",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "sameAsPrimaryRevRec" => "boolean",
        "amortizationTemplate" => "RecordRef",
        "sameAsPrimaryAmortization" => "boolean",
    );
}
