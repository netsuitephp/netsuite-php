<?php
/**
 * This file is part of the netsuitephp/netsuite-php library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/netsuitephp/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/netsuitephp/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 */

namespace NetSuite\Classes;

class CashSaleExpCost {
    /**
     * @var boolean
     */
    public $apply;
    /**
     * @var integer
     */
    public $doc;
    /**
     * @var integer
     */
    public $line;
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var string
     */
    public $billedDate;
    /**
     * @var string
     */
    public $jobDisp;
    /**
     * @var string
     */
    public $employeeDisp;
    /**
     * @var string
     */
    public $categoryDisp;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var string
     */
    public $department;
    /**
     * @var string
     */
    public $class;
    /**
     * @var string
     */
    public $location;
    /**
     * @var float
     */
    public $originalAmount;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var float
     */
    public $taxAmount;
    /**
     * @var string
     */
    public $taxableDisp;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revRecSchedule;
    /**
     * @var string
     */
    public $revRecStartDate;
    /**
     * @var string
     */
    public $revRecEndDate;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var float
     */
    public $tax1Amt;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxCode;
    /**
     * @var float
     */
    public $taxRate1;
    /**
     * @var float
     */
    public $taxRate2;
    static $paramtypesmap = array(
        "apply" => "boolean",
        "doc" => "integer",
        "line" => "integer",
        "taxDetailsReference" => "string",
        "billedDate" => "dateTime",
        "jobDisp" => "string",
        "employeeDisp" => "string",
        "categoryDisp" => "string",
        "memo" => "string",
        "department" => "string",
        "class" => "string",
        "location" => "string",
        "originalAmount" => "float",
        "amount" => "float",
        "taxAmount" => "float",
        "taxableDisp" => "string",
        "revRecSchedule" => "RecordRef",
        "revRecStartDate" => "dateTime",
        "revRecEndDate" => "dateTime",
        "grossAmt" => "float",
        "tax1Amt" => "float",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
    );
}
