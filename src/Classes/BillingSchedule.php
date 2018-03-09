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

class BillingSchedule extends Record {
    public $scheduleType;
    public $name;
    public $recurrencePattern;
    public $project;
    public $initialAmount;
    public $initialTerms;
    public $frequency;
    public $recurrenceDowMaskList;
    public $yearMode;
    public $yearDowim;
    public $yearDow;
    public $yearDowimMonth;
    public $yearMonth;
    public $yearDom;
    public $monthMode;
    public $monthDowim;
    public $monthDow;
    public $monthDom;
    public $dayPeriod;
    public $repeatEvery;
    public $billForActuals;
    public $numberRemaining;
    public $inArrears;
    public $recurrenceTerms;
    public $isPublic;
    public $applyToSubtotal;
    public $transaction;
    public $isInactive;
    public $seriesStartDate;
    public $recurrenceList;
    public $milestoneList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "scheduleType" => "BillingScheduleType",
        "name" => "string",
        "recurrencePattern" => "BillingScheduleRecurrencePattern",
        "project" => "RecordRef",
        "initialAmount" => "string",
        "initialTerms" => "RecordRef",
        "frequency" => "BillingScheduleFrequency",
        "recurrenceDowMaskList" => "RecurrenceDowMaskList",
        "yearMode" => "BillingScheduleRecurrenceMode",
        "yearDowim" => "BillingScheduleYearDowim",
        "yearDow" => "BillingScheduleYearDow",
        "yearDowimMonth" => "BillingScheduleYearDowimMonth",
        "yearMonth" => "BillingScheduleYearMonth",
        "yearDom" => "integer",
        "monthMode" => "BillingScheduleRecurrenceMode",
        "monthDowim" => "BillingScheduleMonthDowim",
        "monthDow" => "BillingScheduleMonthDow",
        "monthDom" => "integer",
        "dayPeriod" => "integer",
        "repeatEvery" => "BillingScheduleRepeatEvery",
        "billForActuals" => "boolean",
        "numberRemaining" => "integer",
        "inArrears" => "boolean",
        "recurrenceTerms" => "RecordRef",
        "isPublic" => "boolean",
        "applyToSubtotal" => "boolean",
        "transaction" => "RecordRef",
        "isInactive" => "boolean",
        "seriesStartDate" => "dateTime",
        "recurrenceList" => "BillingScheduleRecurrenceList",
        "milestoneList" => "BillingScheduleMilestoneList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
