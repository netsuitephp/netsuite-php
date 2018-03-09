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

class Budget extends Record {
    public $year;
    public $customer;
    public $item;
    public $class;
    public $department;
    public $location;
    public $account;
    public $subsidiary;
    public $category;
    public $budgetType;
    public $currency;
    public $periodAmount1;
    public $periodAmount2;
    public $periodAmount3;
    public $periodAmount4;
    public $periodAmount5;
    public $periodAmount6;
    public $periodAmount7;
    public $periodAmount8;
    public $periodAmount9;
    public $periodAmount10;
    public $periodAmount11;
    public $periodAmount12;
    public $periodAmount13;
    public $periodAmount14;
    public $periodAmount15;
    public $periodAmount16;
    public $periodAmount17;
    public $periodAmount18;
    public $periodAmount19;
    public $periodAmount20;
    public $periodAmount21;
    public $periodAmount22;
    public $periodAmount23;
    public $periodAmount24;
    public $amount;
    public $customFieldList;
    public $internalId;
    static $paramtypesmap = array(
        "year" => "RecordRef",
        "customer" => "RecordRef",
        "item" => "RecordRef",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "account" => "RecordRef",
        "subsidiary" => "RecordRef",
        "category" => "RecordRef",
        "budgetType" => "BudgetBudgetType",
        "currency" => "RecordRef",
        "periodAmount1" => "float",
        "periodAmount2" => "float",
        "periodAmount3" => "float",
        "periodAmount4" => "float",
        "periodAmount5" => "float",
        "periodAmount6" => "float",
        "periodAmount7" => "float",
        "periodAmount8" => "float",
        "periodAmount9" => "float",
        "periodAmount10" => "float",
        "periodAmount11" => "float",
        "periodAmount12" => "float",
        "periodAmount13" => "float",
        "periodAmount14" => "float",
        "periodAmount15" => "float",
        "periodAmount16" => "float",
        "periodAmount17" => "float",
        "periodAmount18" => "float",
        "periodAmount19" => "float",
        "periodAmount20" => "float",
        "periodAmount21" => "float",
        "periodAmount22" => "float",
        "periodAmount23" => "float",
        "periodAmount24" => "float",
        "amount" => "float",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
    );
}
