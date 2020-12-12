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

class TaxDetailSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $account;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $details;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $lineNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $taxAmount;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $taxBasis;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $taxCode;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $taxRate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $taxType;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $tranId;
    static $paramtypesmap = array(
        "account" => "SearchColumnStringField[]",
        "details" => "SearchColumnStringField[]",
        "lineNumber" => "SearchColumnLongField[]",
        "taxAmount" => "SearchColumnDoubleField[]",
        "taxBasis" => "SearchColumnDoubleField[]",
        "taxCode" => "SearchColumnSelectField[]",
        "taxRate" => "SearchColumnDoubleField[]",
        "taxType" => "SearchColumnSelectField[]",
        "tranId" => "SearchColumnLongField[]",
    );
}
