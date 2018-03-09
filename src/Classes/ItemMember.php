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

class ItemMember {
    public $memberDescr;
    public $componentYield;
    public $bomQuantity;
    public $itemSource;
    public $quantity;
    public $memberUnit;
    public $vsoeDeferral;
    public $vsoePermitDiscount;
    public $vsoeDelivered;
    public $taxSchedule;
    public $taxcode;
    public $item;
    public $taxrate;
    public $effectiveDate;
    public $obsoleteDate;
    public $effectiveRevision;
    public $obsoleteRevision;
    public $lineNumber;
    public $memberKey;
    static $paramtypesmap = array(
        "memberDescr" => "string",
        "componentYield" => "float",
        "bomQuantity" => "float",
        "itemSource" => "ItemSource",
        "quantity" => "float",
        "memberUnit" => "string",
        "vsoeDeferral" => "VsoeDeferral",
        "vsoePermitDiscount" => "VsoePermitDiscount",
        "vsoeDelivered" => "boolean",
        "taxSchedule" => "RecordRef",
        "taxcode" => "string",
        "item" => "RecordRef",
        "taxrate" => "float",
        "effectiveDate" => "dateTime",
        "obsoleteDate" => "dateTime",
        "effectiveRevision" => "RecordRef",
        "obsoleteRevision" => "RecordRef",
        "lineNumber" => "integer",
        "memberKey" => "string",
    );
}
