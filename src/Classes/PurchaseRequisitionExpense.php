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

class PurchaseRequisitionExpense {
    /**
     * @var integer
     */
    public $line;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $category;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var boolean
     */
    public $isClosed;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $account;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $poVendor;
    /**
     * @var float
     */
    public $estimatedAmount;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customer;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $linkedOrderList;
    /**
     * @var string
     */
    public $linkedOrderStatus;
    /**
     * @var boolean
     */
    public $isBillable;
    static $paramtypesmap = array(
        "line" => "integer",
        "category" => "RecordRef",
        "location" => "RecordRef",
        "isClosed" => "boolean",
        "account" => "RecordRef",
        "poVendor" => "RecordRef",
        "estimatedAmount" => "float",
        "amount" => "float",
        "memo" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "customer" => "RecordRef",
        "linkedOrderList" => "RecordRefList",
        "linkedOrderStatus" => "string",
        "isBillable" => "boolean",
    );
}
