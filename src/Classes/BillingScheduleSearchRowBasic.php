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

class BillingScheduleSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $applyToSubtotal;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $frequency;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $inArrears;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $initialAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $initialTerms;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isPublic;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $recurrenceCount;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $recurrencePattern;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $recurrenceTerms;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $repeatEvery;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $type;
    static $paramtypesmap = array(
        "applyToSubtotal" => "SearchColumnBooleanField[]",
        "externalId" => "SearchColumnSelectField[]",
        "frequency" => "SearchColumnEnumSelectField[]",
        "inArrears" => "SearchColumnBooleanField[]",
        "initialAmount" => "SearchColumnStringField[]",
        "initialTerms" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isPublic" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "recurrenceCount" => "SearchColumnLongField[]",
        "recurrencePattern" => "SearchColumnEnumSelectField[]",
        "recurrenceTerms" => "SearchColumnStringField[]",
        "repeatEvery" => "SearchColumnLongField[]",
        "type" => "SearchColumnEnumSelectField[]",
    );
}
