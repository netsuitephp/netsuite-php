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

class BillingScheduleSearchRowBasic extends SearchRowBasic {
    public $applyToSubtotal;
    public $externalId;
    public $frequency;
    public $inArrears;
    public $initialAmount;
    public $initialTerms;
    public $internalId;
    public $isInactive;
    public $isPublic;
    public $name;
    public $recurrenceCount;
    public $recurrencePattern;
    public $recurrenceTerms;
    public $repeatEvery;
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
