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

class Budget extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $year;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customer;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $account;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $category;
    /**
     * @var \NetSuite\Classes\BudgetBudgetType
     */
    public $budgetType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $periodAmount1;
    /**
     * @var float
     */
    public $periodAmount2;
    /**
     * @var float
     */
    public $periodAmount3;
    /**
     * @var float
     */
    public $periodAmount4;
    /**
     * @var float
     */
    public $periodAmount5;
    /**
     * @var float
     */
    public $periodAmount6;
    /**
     * @var float
     */
    public $periodAmount7;
    /**
     * @var float
     */
    public $periodAmount8;
    /**
     * @var float
     */
    public $periodAmount9;
    /**
     * @var float
     */
    public $periodAmount10;
    /**
     * @var float
     */
    public $periodAmount11;
    /**
     * @var float
     */
    public $periodAmount12;
    /**
     * @var float
     */
    public $periodAmount13;
    /**
     * @var float
     */
    public $periodAmount14;
    /**
     * @var float
     */
    public $periodAmount15;
    /**
     * @var float
     */
    public $periodAmount16;
    /**
     * @var float
     */
    public $periodAmount17;
    /**
     * @var float
     */
    public $periodAmount18;
    /**
     * @var float
     */
    public $periodAmount19;
    /**
     * @var float
     */
    public $periodAmount20;
    /**
     * @var float
     */
    public $periodAmount21;
    /**
     * @var float
     */
    public $periodAmount22;
    /**
     * @var float
     */
    public $periodAmount23;
    /**
     * @var float
     */
    public $periodAmount24;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $accountingBook;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
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
        "accountingBook" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
    );
}
