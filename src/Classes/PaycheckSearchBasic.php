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

class PaycheckSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $account;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $batchNumber;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $checkDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $employee;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $hasGLImpact;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $payrollItem;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $payrollItemType;
    static $paramtypesmap = array(
        "account" => "SearchMultiSelectField",
        "batchNumber" => "SearchLongField",
        "checkDate" => "SearchDateField",
        "employee" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "hasGLImpact" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "payrollItem" => "SearchMultiSelectField",
        "payrollItemType" => "SearchMultiSelectField",
    );
}
