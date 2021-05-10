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

class PaycheckSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $account;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $amendedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $amount;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $batchNumber;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $checkDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $employee;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $hasGLImpact;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $hours;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $payrollItem;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $payrollItemType;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $subjectWages;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $taxableWages;
    static $paramtypesmap = array(
        "account" => "SearchColumnSelectField[]",
        "amendedDate" => "SearchColumnDateField[]",
        "amount" => "SearchColumnDoubleField[]",
        "batchNumber" => "SearchColumnLongField[]",
        "checkDate" => "SearchColumnDateField[]",
        "employee" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "hasGLImpact" => "SearchColumnBooleanField[]",
        "hours" => "SearchColumnDoubleField[]",
        "internalId" => "SearchColumnSelectField[]",
        "payrollItem" => "SearchColumnSelectField[]",
        "payrollItemType" => "SearchColumnSelectField[]",
        "subjectWages" => "SearchColumnDoubleField[]",
        "taxableWages" => "SearchColumnDoubleField[]",
    );
}
