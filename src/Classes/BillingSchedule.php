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

class BillingSchedule extends Record {
    /**
     * @var \NetSuite\Classes\BillingScheduleType
     */
    public $scheduleType;
    /**
     * @var string
     */
    public $name;
    /**
     * @var \NetSuite\Classes\BillingScheduleRecurrencePattern
     */
    public $recurrencePattern;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $project;
    /**
     * @var string
     */
    public $initialAmount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $initialTerms;
    /**
     * @var \NetSuite\Classes\BillingScheduleFrequency
     */
    public $frequency;
    /**
     * @var \NetSuite\Classes\RecurrenceDowMaskList
     */
    public $recurrenceDowMaskList;
    /**
     * @var \NetSuite\Classes\BillingScheduleRecurrenceMode
     */
    public $yearMode;
    /**
     * @var \NetSuite\Classes\BillingScheduleYearDowim
     */
    public $yearDowim;
    /**
     * @var \NetSuite\Classes\BillingScheduleYearDow
     */
    public $yearDow;
    /**
     * @var \NetSuite\Classes\BillingScheduleYearDowimMonth
     */
    public $yearDowimMonth;
    /**
     * @var \NetSuite\Classes\BillingScheduleYearMonth
     */
    public $yearMonth;
    /**
     * @var integer
     */
    public $yearDom;
    /**
     * @var \NetSuite\Classes\BillingScheduleRecurrenceMode
     */
    public $monthMode;
    /**
     * @var \NetSuite\Classes\BillingScheduleMonthDowim
     */
    public $monthDowim;
    /**
     * @var \NetSuite\Classes\BillingScheduleMonthDow
     */
    public $monthDow;
    /**
     * @var integer
     */
    public $monthDom;
    /**
     * @var integer
     */
    public $dayPeriod;
    /**
     * @var \NetSuite\Classes\BillingScheduleRepeatEvery
     */
    public $repeatEvery;
    /**
     * @var boolean
     */
    public $billForActuals;
    /**
     * @var integer
     */
    public $numberRemaining;
    /**
     * @var boolean
     */
    public $inArrears;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $recurrenceTerms;
    /**
     * @var boolean
     */
    public $isPublic;
    /**
     * @var boolean
     */
    public $applyToSubtotal;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $transaction;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var string
     */
    public $seriesStartDate;
    /**
     * @var \NetSuite\Classes\BillingScheduleRecurrenceList
     */
    public $recurrenceList;
    /**
     * @var \NetSuite\Classes\BillingScheduleMilestoneList
     */
    public $milestoneList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
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
