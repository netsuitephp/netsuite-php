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

class AccountingPeriod extends Record {
    public $periodName;
    public $parent;
    public $startDate;
    public $endDate;
    public $fiscalCalendar;
    public $closedOnDate;
    public $isAdjust;
    public $fiscalCalendarsList;
    public $isQuarter;
    public $isYear;
    public $closed;
    public $apLocked;
    public $arLocked;
    public $payrollLocked;
    public $allLocked;
    public $allowNonGLChanges;
    public $internalId;
    static $paramtypesmap = array(
        "periodName" => "string",
        "parent" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "fiscalCalendar" => "RecordRef",
        "closedOnDate" => "dateTime",
        "isAdjust" => "boolean",
        "fiscalCalendarsList" => "AccountingPeriodFiscalCalendarsList",
        "isQuarter" => "boolean",
        "isYear" => "boolean",
        "closed" => "boolean",
        "apLocked" => "boolean",
        "arLocked" => "boolean",
        "payrollLocked" => "boolean",
        "allLocked" => "boolean",
        "allowNonGLChanges" => "boolean",
        "internalId" => "string",
    );
}
