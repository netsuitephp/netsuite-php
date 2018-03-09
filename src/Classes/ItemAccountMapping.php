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

class ItemAccountMapping extends Record {
    public $customForm;
    public $effectiveDate;
    public $endDate;
    public $accountingBook;
    public $subsidiary;
    public $itemAccount;
    public $sourceAccount;
    public $class;
    public $department;
    public $location;
    public $destinationAccount;
    public $customDimension;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "effectiveDate" => "dateTime",
        "endDate" => "dateTime",
        "accountingBook" => "RecordRef",
        "subsidiary" => "RecordRef",
        "itemAccount" => "ItemAccountMappingItemAccount",
        "sourceAccount" => "RecordRef",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "destinationAccount" => "RecordRef",
        "customDimension" => "BaseRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
