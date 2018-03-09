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

class TimeSheetSearchBasic extends SearchRecordBasic {
    public $approvalStatus;
    public $employee;
    public $externalId;
    public $externalIdString;
    public $id;
    public $internalId;
    public $internalIdNumber;
    public $timeSheetDate;
    public $totalHours;
    public $customFieldList;
    static $paramtypesmap = array(
        "approvalStatus" => "SearchMultiSelectField",
        "employee" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "id" => "SearchLongField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "timeSheetDate" => "SearchDateField",
        "totalHours" => "SearchDoubleField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
