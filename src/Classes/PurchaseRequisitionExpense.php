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

class PurchaseRequisitionExpense {
    public $line;
    public $category;
    public $location;
    public $isClosed;
    public $account;
    public $poVendor;
    public $estimatedAmount;
    public $amount;
    public $memo;
    public $department;
    public $class;
    public $customer;
    public $linkedOrderList;
    public $linkedOrderStatus;
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
