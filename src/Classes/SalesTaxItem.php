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

class SalesTaxItem extends Record {
    /**
     * @var string
     */
    public $itemId;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxAgency;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $purchaseAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $saleAccount;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var string
     */
    public $effectiveFrom;
    /**
     * @var string
     */
    public $validUntil;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var boolean
     */
    public $includeChildren;
    /**
     * @var boolean
     */
    public $eccode;
    /**
     * @var boolean
     */
    public $reverseCharge;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parent;
    /**
     * @var boolean
     */
    public $service;
    /**
     * @var boolean
     */
    public $exempt;
    /**
     * @var boolean
     */
    public $isDefault;
    /**
     * @var boolean
     */
    public $excludeFromTaxReports;
    /**
     * @var \NetSuite\Classes\SalesTaxItemAvailable
     */
    public $available;
    /**
     * @var boolean
     */
    public $export;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxAccount;
    /**
     * @var string
     */
    public $county;
    /**
     * @var string
     */
    public $city;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $zip;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $nexusCountry;
    /**
     * @var string
     */
    public $name;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "itemId" => "string",
        "displayName" => "string",
        "description" => "string",
        "rate" => "string",
        "taxType" => "RecordRef",
        "taxAgency" => "RecordRef",
        "purchaseAccount" => "RecordRef",
        "saleAccount" => "RecordRef",
        "isInactive" => "boolean",
        "effectiveFrom" => "dateTime",
        "validUntil" => "dateTime",
        "subsidiaryList" => "RecordRefList",
        "includeChildren" => "boolean",
        "eccode" => "boolean",
        "reverseCharge" => "boolean",
        "parent" => "RecordRef",
        "service" => "boolean",
        "exempt" => "boolean",
        "isDefault" => "boolean",
        "excludeFromTaxReports" => "boolean",
        "available" => "SalesTaxItemAvailable",
        "export" => "boolean",
        "taxAccount" => "RecordRef",
        "county" => "string",
        "city" => "string",
        "state" => "string",
        "zip" => "string",
        "nexusCountry" => "RecordRef",
        "name" => "string",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
