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

class TaxGroup extends Record {
    public $itemId;
    public $description;
    public $state;
    public $subsidiaryList;
    public $taxitem1;
    public $unitprice1;
    public $taxitem2;
    public $unitprice2;
    public $piggyback;
    public $isInactive;
    public $rate;
    public $taxType;
    public $includeChildren;
    public $county;
    public $city;
    public $zip;
    public $nexusCountry;
    public $isDefault;
    public $taxItemList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "itemId" => "string",
        "description" => "string",
        "state" => "string",
        "subsidiaryList" => "RecordRefList",
        "taxitem1" => "RecordRef",
        "unitprice1" => "string",
        "taxitem2" => "RecordRef",
        "unitprice2" => "string",
        "piggyback" => "boolean",
        "isInactive" => "boolean",
        "rate" => "float",
        "taxType" => "RecordRef",
        "includeChildren" => "boolean",
        "county" => "string",
        "city" => "string",
        "zip" => "string",
        "nexusCountry" => "RecordRef",
        "isDefault" => "boolean",
        "taxItemList" => "TaxGroupTaxItemList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
