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

class ItemMember {
    /**
     * @var string
     */
    public $memberDescr;
    /**
     * @var float
     */
    public $componentYield;
    /**
     * @var float
     */
    public $bomQuantity;
    /**
     * @var \NetSuite\Classes\ItemSource
     */
    public $itemSource;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $memberUnit;
    /**
     * @var \NetSuite\Classes\VsoeDeferral
     */
    public $vsoeDeferral;
    /**
     * @var \NetSuite\Classes\VsoePermitDiscount
     */
    public $vsoePermitDiscount;
    /**
     * @var boolean
     */
    public $vsoeDelivered;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxSchedule;
    /**
     * @var string
     */
    public $taxcode;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var float
     */
    public $taxrate;
    /**
     * @var string
     */
    public $effectiveDate;
    /**
     * @var string
     */
    public $obsoleteDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $effectiveRevision;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $obsoleteRevision;
    /**
     * @var integer
     */
    public $lineNumber;
    /**
     * @var string
     */
    public $memberKey;
    static $paramtypesmap = array(
        "memberDescr" => "string",
        "componentYield" => "float",
        "bomQuantity" => "float",
        "itemSource" => "ItemSource",
        "quantity" => "float",
        "memberUnit" => "RecordRef",
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
