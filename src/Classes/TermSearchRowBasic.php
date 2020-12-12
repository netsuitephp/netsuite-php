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

class TermSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $dateDriven;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $dayDiscountExpires;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $dayOfMonthNetDue;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $daysUntilExpiry;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $daysUntilNetDue;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $discountPercent;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $discountPercentDateDriven;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $dueNextMonthIfWithinDays;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $installment;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $preferred;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $recurrenceCount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $recurrenceFrequency;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $repeatEvery;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $splitEvenly;
    static $paramtypesmap = array(
        "dateDriven" => "SearchColumnBooleanField[]",
        "dayDiscountExpires" => "SearchColumnLongField[]",
        "dayOfMonthNetDue" => "SearchColumnLongField[]",
        "daysUntilExpiry" => "SearchColumnLongField[]",
        "daysUntilNetDue" => "SearchColumnLongField[]",
        "discountPercent" => "SearchColumnDoubleField[]",
        "discountPercentDateDriven" => "SearchColumnDoubleField[]",
        "dueNextMonthIfWithinDays" => "SearchColumnLongField[]",
        "externalId" => "SearchColumnSelectField[]",
        "installment" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "preferred" => "SearchColumnBooleanField[]",
        "recurrenceCount" => "SearchColumnLongField[]",
        "recurrenceFrequency" => "SearchColumnStringField[]",
        "repeatEvery" => "SearchColumnLongField[]",
        "splitEvenly" => "SearchColumnBooleanField[]",
    );
}
