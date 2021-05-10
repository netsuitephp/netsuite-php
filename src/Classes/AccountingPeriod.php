<?php
/**
 * This file is part of the netsuitephp/netsuite-php library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/netsuitephp/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/netsuitephp/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 */

namespace NetSuite\Classes;

class AccountingPeriod extends Record {
    /**
     * @var string
     */
    public $periodName;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parent;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $fiscalCalendar;
    /**
     * @var string
     */
    public $closedOnDate;
    /**
     * @var boolean
     */
    public $isAdjust;
    /**
     * @var \NetSuite\Classes\AccountingPeriodFiscalCalendarsList
     */
    public $fiscalCalendarsList;
    /**
     * @var boolean
     */
    public $isQuarter;
    /**
     * @var boolean
     */
    public $isYear;
    /**
     * @var boolean
     */
    public $closed;
    /**
     * @var boolean
     */
    public $apLocked;
    /**
     * @var boolean
     */
    public $arLocked;
    /**
     * @var boolean
     */
    public $payrollLocked;
    /**
     * @var boolean
     */
    public $allLocked;
    /**
     * @var boolean
     */
    public $allowNonGLChanges;
    /**
     * @var string
     */
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
