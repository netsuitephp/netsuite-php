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

class BudgetSearchRowBasic extends SearchRowBasic {
    public $account;
    public $amount;
    public $category;
    public $class;
    public $classnohierarchy;
    public $currency;
    public $customer;
    public $department;
    public $departmentnohierarchy;
    public $global;
    public $internalId;
    public $item;
    public $location;
    public $locationnohierarchy;
    public $subsidiary;
    public $subsidiarynohierarchy;
    public $year;
    public $year2;
    public $customFieldList;
    static $paramtypesmap = array(
        "account" => "SearchColumnStringField[]",
        "amount" => "SearchColumnDoubleField[]",
        "category" => "SearchColumnStringField[]",
        "class" => "SearchColumnStringField[]",
        "classnohierarchy" => "SearchColumnStringField[]",
        "currency" => "SearchColumnStringField[]",
        "customer" => "SearchColumnStringField[]",
        "department" => "SearchColumnStringField[]",
        "departmentnohierarchy" => "SearchColumnStringField[]",
        "global" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "item" => "SearchColumnStringField[]",
        "location" => "SearchColumnStringField[]",
        "locationnohierarchy" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnStringField[]",
        "subsidiarynohierarchy" => "SearchColumnStringField[]",
        "year" => "SearchColumnStringField[]",
        "year2" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
