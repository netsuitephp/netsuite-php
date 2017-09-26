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

class TaxGroupSearchBasic extends SearchRecordBasic {
    public $city;
    public $country;
    public $county;
    public $description;
    public $externalId;
    public $externalIdString;
    public $includeChildren;
    public $internalId;
    public $internalIdNumber;
    public $isDefault;
    public $isInactive;
    public $itemId;
    public $piggyBack;
    public $rate;
    public $state;
    public $subsidiary;
    public $taxItem1;
    public $taxItem2;
    public $taxType;
    public $unitPrice1;
    public $unitPrice2;
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
