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

class BillingScheduleSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $applyToSubtotal;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $frequency;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $inArrears;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $initialAmount;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $initialTerms;
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
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isPublic;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $recurrenceCount;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $recurrencePattern;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $recurrenceTerms;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $repeatEvery;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $type;
    static $paramtypesmap = array(
        "applyToSubtotal" => "SearchBooleanField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "frequency" => "SearchEnumMultiSelectField",
        "inArrears" => "SearchBooleanField",
        "initialAmount" => "SearchDoubleField",
        "initialTerms" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "isPublic" => "SearchBooleanField",
        "name" => "SearchStringField",
        "recurrenceCount" => "SearchLongField",
        "recurrencePattern" => "SearchEnumMultiSelectField",
        "recurrenceTerms" => "SearchMultiSelectField",
        "repeatEvery" => "SearchLongField",
        "type" => "SearchEnumMultiSelectField",
    );
}
