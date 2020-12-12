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

class BudgetSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $account;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $accountingBook;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $amount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $category;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $class;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $classnohierarchy;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $customer;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $department;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $departmentnohierarchy;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $global;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $locationnohierarchy;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $subsidiarynohierarchy;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $year;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $year2;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "account" => "SearchColumnStringField[]",
        "accountingBook" => "SearchColumnStringField[]",
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
