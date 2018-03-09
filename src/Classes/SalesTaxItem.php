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

class SalesTaxItem extends Record {
    public $itemId;
    public $displayName;
    public $description;
    public $rate;
    public $taxType;
    public $taxAgency;
    public $purchaseAccount;
    public $saleAccount;
    public $isInactive;
    public $effectiveFrom;
    public $validUntil;
    public $subsidiaryList;
    public $includeChildren;
    public $eccode;
    public $reverseCharge;
    public $parent;
    public $service;
    public $exempt;
    public $isDefault;
    public $excludeFromTaxReports;
    public $available;
    public $export;
    public $taxAccount;
    public $county;
    public $city;
    public $state;
    public $zip;
    public $nexusCountry;
    public $internalId;
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
        "internalId" => "string",
        "externalId" => "string",
    );
}
