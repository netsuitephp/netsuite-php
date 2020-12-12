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

class TermSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $dateDriven;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $dayDiscountExpires;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $dayOfMonthNetDue;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $daysUntilExpiry;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $daysUntilNetDue;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $discountPercent;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $discountPercentDateDriven;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $dueNextMonthIfWithinDays;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $installment;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $preferred;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $recurrenceCount;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $recurrenceFrequency;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $repeatEvery;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $splitEvenly;
    static $paramtypesmap = array(
        "dateDriven" => "SearchBooleanField",
        "dayDiscountExpires" => "SearchLongField",
        "dayOfMonthNetDue" => "SearchLongField",
        "daysUntilExpiry" => "SearchLongField",
        "daysUntilNetDue" => "SearchLongField",
        "discountPercent" => "SearchDoubleField",
        "discountPercentDateDriven" => "SearchDoubleField",
        "dueNextMonthIfWithinDays" => "SearchLongField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "installment" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "name" => "SearchStringField",
        "preferred" => "SearchBooleanField",
        "recurrenceCount" => "SearchLongField",
        "recurrenceFrequency" => "SearchEnumMultiSelectField",
        "repeatEvery" => "SearchLongField",
        "splitEvenly" => "SearchBooleanField",
    );
}
