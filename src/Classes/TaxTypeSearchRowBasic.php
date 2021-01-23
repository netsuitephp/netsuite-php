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

class TaxTypeSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $description;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $doesNotAddToTotal;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $nexus;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $payablesAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $postToItemCost;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $receivablesAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $reverseCharge;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $taxInNetAmount;
    static $paramtypesmap = array(
        "country" => "SearchColumnEnumSelectField[]",
        "description" => "SearchColumnStringField[]",
        "doesNotAddToTotal" => "SearchColumnBooleanField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "nexus" => "SearchColumnSelectField[]",
        "payablesAccount" => "SearchColumnSelectField[]",
        "postToItemCost" => "SearchColumnBooleanField[]",
        "receivablesAccount" => "SearchColumnSelectField[]",
        "reverseCharge" => "SearchColumnBooleanField[]",
        "taxInNetAmount" => "SearchColumnBooleanField[]",
    );
}
