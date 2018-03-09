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

class ItemAccountMappingSearchRowBasic extends SearchRowBasic {
    public $accountingBook;
    public $class;
    public $customDimension;
    public $department;
    public $destinationAccount;
    public $effectiveDate;
    public $endDate;
    public $externalId;
    public $internalId;
    public $itemAccount;
    public $location;
    public $sourceAccount;
    public $subsidiary;
    public $customFieldList;
    static $paramtypesmap = array(
        "accountingBook" => "SearchColumnSelectField[]",
        "class" => "SearchColumnSelectField[]",
        "customDimension" => "SearchColumnSelectCustomField[]",
        "department" => "SearchColumnSelectField[]",
        "destinationAccount" => "SearchColumnSelectField[]",
        "effectiveDate" => "SearchColumnDateField[]",
        "endDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "itemAccount" => "SearchColumnEnumSelectField[]",
        "location" => "SearchColumnSelectField[]",
        "sourceAccount" => "SearchColumnSelectField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
