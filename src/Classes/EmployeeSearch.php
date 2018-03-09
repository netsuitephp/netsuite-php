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

class EmployeeSearch extends SearchRecord {
    public $basic;
    public $campaignResponseJoin;
    public $chargeJoin;
    public $departmentJoin;
    public $fileJoin;
    public $locationJoin;
    public $messagesJoin;
    public $messagesFromJoin;
    public $messagesToJoin;
    public $resourceAllocationJoin;
    public $subsidiaryJoin;
    public $timeJoin;
    public $transactionJoin;
    public $userJoin;
    public $userNotesJoin;
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "EmployeeSearchBasic",
        "campaignResponseJoin" => "CampaignSearchBasic",
        "chargeJoin" => "ChargeSearchBasic",
        "departmentJoin" => "DepartmentSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "locationJoin" => "LocationSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "messagesFromJoin" => "MessageSearchBasic",
        "messagesToJoin" => "MessageSearchBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchBasic",
        "subsidiaryJoin" => "SubsidiarySearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
