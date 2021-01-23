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

class TaxGroupSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $city;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $county;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $description;
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
    public $includeChildren;
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
    public $isDefault;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $itemId;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $piggyBack;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $rate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $state;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $taxItem1;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $taxItem2;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $taxType;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $unitPrice1;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $unitPrice2;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $zip;
    static $paramtypesmap = array(
        "city" => "SearchStringField",
        "country" => "SearchEnumMultiSelectField",
        "county" => "SearchStringField",
        "description" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "includeChildren" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isDefault" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "itemId" => "SearchStringField",
        "piggyBack" => "SearchBooleanField",
        "rate" => "SearchDoubleField",
        "state" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "taxItem1" => "SearchMultiSelectField",
        "taxItem2" => "SearchMultiSelectField",
        "taxType" => "SearchMultiSelectField",
        "unitPrice1" => "SearchDoubleField",
        "unitPrice2" => "SearchDoubleField",
        "zip" => "SearchStringField",
    );
}
