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

class TaxGroup extends Record {
    /**
     * @var string
     */
    public $itemId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $state;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $subsidiaryList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxitem1;
    /**
     * @var string
     */
    public $unitprice1;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxitem2;
    /**
     * @var string
     */
    public $unitprice2;
    /**
     * @var boolean
     */
    public $piggyback;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var float
     */
    public $rate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxType;
    /**
     * @var boolean
     */
    public $includeChildren;
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
    public $zip;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $nexusCountry;
    /**
     * @var boolean
     */
    public $isDefault;
    /**
     * @var \NetSuite\Classes\TaxGroupTaxItemList
     */
    public $taxItemList;
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
