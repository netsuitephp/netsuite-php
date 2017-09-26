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

class TaxGroupSearchRowBasic extends SearchRowBasic {
    public $city;
    public $country;
    public $county;
    public $externalId;
    public $includeChildren;
    public $internalId;
    public $isDefault;
    public $isInactive;
    public $itemId;
    public $piggyBack;
    public $rate;
    public $state;
    public $stateDisplayName;
    public $subsidiary;
    public $subsidiaryNoHierarchy;
    public $taxItem1;
    public $taxItem2;
    public $taxType;
    public $unitPrice1;
    public $unitPrice2;
    public $zip;
    static $paramtypesmap = array(
        "city" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "county" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "includeChildren" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isDefault" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "itemId" => "SearchColumnStringField[]",
        "piggyBack" => "SearchColumnBooleanField[]",
        "rate" => "SearchColumnDoubleField[]",
        "state" => "SearchColumnSelectField[]",
        "stateDisplayName" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "subsidiaryNoHierarchy" => "SearchColumnSelectField[]",
        "taxItem1" => "SearchColumnSelectField[]",
        "taxItem2" => "SearchColumnSelectField[]",
        "taxType" => "SearchColumnSelectField[]",
        "unitPrice1" => "SearchColumnDoubleField[]",
        "unitPrice2" => "SearchColumnDoubleField[]",
        "zip" => "SearchColumnStringField[]",
    );
}
