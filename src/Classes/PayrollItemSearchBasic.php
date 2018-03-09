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

class PayrollItemSearchBasic extends SearchRecordBasic {
    public $externalId;
    public $externalIdString;
    public $internalId;
    public $internalIdNumber;
    public $expenseAccount;
    public $itemTypeNoHierarchy;
    public $liabilityAccount;
    public $name;
    public $subsidiary;
    public $vendor;
    public $customFieldList;
    static $paramtypesmap = array(
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "expenseAccount" => "SearchMultiSelectField",
        "itemTypeNoHierarchy" => "SearchEnumMultiSelectField",
        "liabilityAccount" => "SearchMultiSelectField",
        "name" => "SearchStringField",
        "subsidiary" => "SearchMultiSelectField",
        "vendor" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
