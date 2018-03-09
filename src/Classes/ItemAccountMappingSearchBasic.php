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

class ItemAccountMappingSearchBasic extends SearchRecordBasic {
    public $accountingBook;
    public $class;
    public $customDimension;
    public $department;
    public $destinationAccount;
    public $effectiveDate;
    public $endDate;
    public $externalId;
    public $externalIdString;
    public $internalId;
    public $internalIdNumber;
    public $itemAccount;
    public $location;
    public $sourceAccount;
    public $subsidiary;
    public $customFieldList;
    static $paramtypesmap = array(
        "accountingBook" => "SearchMultiSelectField",
        "class" => "SearchMultiSelectField",
        "customDimension" => "SearchMultiSelectCustomField",
        "department" => "SearchMultiSelectField",
        "destinationAccount" => "SearchMultiSelectField",
        "effectiveDate" => "SearchDateField",
        "endDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "itemAccount" => "SearchEnumMultiSelectField",
        "location" => "SearchMultiSelectField",
        "sourceAccount" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
