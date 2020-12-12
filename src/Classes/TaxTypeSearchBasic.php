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

class TaxTypeSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $description;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $doesNotAddToTotal;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
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
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $nexus;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $payablesAccount;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $postToItemCost;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $receivablesAccount;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $reverseCharge;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $taxInNetAmount;
    static $paramtypesmap = array(
        "country" => "SearchEnumMultiSelectField",
        "description" => "SearchStringField",
        "doesNotAddToTotal" => "SearchBooleanField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "name" => "SearchStringField",
        "nexus" => "SearchMultiSelectField",
        "payablesAccount" => "SearchMultiSelectField",
        "postToItemCost" => "SearchBooleanField",
        "receivablesAccount" => "SearchMultiSelectField",
        "reverseCharge" => "SearchBooleanField",
        "taxInNetAmount" => "SearchBooleanField",
    );
}
