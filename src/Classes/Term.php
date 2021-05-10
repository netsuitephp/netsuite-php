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

class Term extends Record {
    /**
     * @var string
     */
    public $name;
    /**
     * @var boolean
     */
    public $dateDriven;
    /**
     * @var integer
     */
    public $daysUntilNetDue;
    /**
     * @var float
     */
    public $discountPercent;
    /**
     * @var integer
     */
    public $daysUntilExpiry;
    /**
     * @var integer
     */
    public $dayOfMonthNetDue;
    /**
     * @var integer
     */
    public $dueNextMonthIfWithinDays;
    /**
     * @var float
     */
    public $discountPercentDateDriven;
    /**
     * @var integer
     */
    public $dayDiscountExpires;
    /**
     * @var boolean
     */
    public $preferred;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var boolean
     */
    public $installment;
    /**
     * @var \NetSuite\Classes\TermRecurrenceFrequency
     */
    public $recurrenceFrequency;
    /**
     * @var integer
     */
    public $recurrenceCount;
    /**
     * @var integer
     */
    public $repeatEvery;
    /**
     * @var boolean
     */
    public $splitEvenly;
    /**
     * @var \NetSuite\Classes\TermPercentagesList
     */
    public $percentagesList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "name" => "string",
        "dateDriven" => "boolean",
        "daysUntilNetDue" => "integer",
        "discountPercent" => "float",
        "daysUntilExpiry" => "integer",
        "dayOfMonthNetDue" => "integer",
        "dueNextMonthIfWithinDays" => "integer",
        "discountPercentDateDriven" => "float",
        "dayDiscountExpires" => "integer",
        "preferred" => "boolean",
        "isInactive" => "boolean",
        "installment" => "boolean",
        "recurrenceFrequency" => "TermRecurrenceFrequency",
        "recurrenceCount" => "integer",
        "repeatEvery" => "integer",
        "splitEvenly" => "boolean",
        "percentagesList" => "TermPercentagesList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
