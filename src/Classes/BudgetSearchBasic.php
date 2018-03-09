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

class BudgetSearchBasic extends SearchRecordBasic {
    public $account;
    public $amount;
    public $category;
    public $class;
    public $currency;
    public $customer;
    public $department;
    public $global;
    public $internalId;
    public $internalIdNumber;
    public $item;
    public $location;
    public $subsidiary;
    public $year;
    public $year2;
    public $customFieldList;
    static $paramtypesmap = array(
        "account" => "SearchMultiSelectField",
        "amount" => "SearchDoubleField",
        "category" => "SearchMultiSelectField",
        "class" => "SearchMultiSelectField",
        "currency" => "SearchMultiSelectField",
        "customer" => "SearchMultiSelectField",
        "department" => "SearchMultiSelectField",
        "global" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "item" => "SearchMultiSelectField",
        "location" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "year" => "SearchMultiSelectField",
        "year2" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
