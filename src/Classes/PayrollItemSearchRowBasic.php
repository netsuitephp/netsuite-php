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

class PayrollItemSearchRowBasic extends SearchRowBasic {
    public $expenseAccount;
    public $externalId;
    public $internalId;
    public $isInactive;
    public $itemTypeNoHierarchy;
    public $liabilityAccount;
    public $name;
    public $subsidiary;
    public $vendor;
    public $customFieldList;
    static $paramtypesmap = array(
        "expenseAccount" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "itemTypeNoHierarchy" => "SearchColumnStringField[]",
        "liabilityAccount" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnStringField[]",
        "vendor" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
