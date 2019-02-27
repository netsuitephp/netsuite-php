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
 * generated:  2019-02-27 03:26:43 PM PST
 */

namespace NetSuite\Classes;

class PaycheckSearchBasic extends SearchRecordBasic {
    public $account;
    public $batchNumber;
    public $checkDate;
    public $employee;
    public $externalId;
    public $externalIdString;
    public $hasGLImpact;
    public $internalId;
    public $internalIdNumber;
    public $payrollItem;
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
