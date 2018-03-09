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

class RevRecTemplate extends Record {
    public $name;
    public $amortizationType;
    public $recurrenceType;
    public $recogIntervalSrc;
    public $amortizationPeriod;
    public $periodOffset;
    public $revRecOffset;
    public $initialAmount;
    public $isInactive;
    public $recurrenceList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "name" => "string",
        "amortizationType" => "RevRecScheduleAmortizationType",
        "recurrenceType" => "RevRecScheduleRecurrenceType",
        "recogIntervalSrc" => "RevRecScheduleRecogIntervalSrc",
        "amortizationPeriod" => "integer",
        "periodOffset" => "integer",
        "revRecOffset" => "integer",
        "initialAmount" => "float",
        "isInactive" => "boolean",
        "recurrenceList" => "RevRecTemplateRecurrenceList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
