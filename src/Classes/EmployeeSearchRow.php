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
 * generated:  2020-12-11 06:57:10 PM PST
 */

namespace NetSuite\Classes;

class EmployeeSearchRow extends SearchRow {
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\CampaignSearchRowBasic
     */
    public $campaignResponseJoin;
    /**
     * @var \NetSuite\Classes\ChargeSearchRowBasic
     */
    public $chargeJoin;
    /**
     * @var \NetSuite\Classes\DepartmentSearchRowBasic
     */
    public $departmentJoin;
    /**
     * @var \NetSuite\Classes\FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var \NetSuite\Classes\HcmJobSearchRowBasic
     */
    public $hcmJobJoin;
    /**
     * @var \NetSuite\Classes\LocationSearchRowBasic
     */
    public $locationJoin;
    /**
     * @var \NetSuite\Classes\JobSearchRowBasic
     */
    public $managedJobJoin;
    /**
     * @var \NetSuite\Classes\MessageSearchRowBasic
     */
    public $messagesJoin;
    /**
     * @var \NetSuite\Classes\MessageSearchRowBasic
     */
    public $messagesFromJoin;
    /**
     * @var \NetSuite\Classes\MessageSearchRowBasic
     */
    public $messagesToJoin;
    /**
     * @var \NetSuite\Classes\ResourceAllocationSearchRowBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var \NetSuite\Classes\SubsidiarySearchRowBasic
     */
    public $subsidiaryJoin;
    /**
     * @var \NetSuite\Classes\TimeBillSearchRowBasic
     */
    public $timeJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $transactionJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var \NetSuite\Classes\NoteSearchRowBasic
     */
    public $userNotesJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchRowBasic[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "EmployeeSearchRowBasic",
        "campaignResponseJoin" => "CampaignSearchRowBasic",
        "chargeJoin" => "ChargeSearchRowBasic",
        "departmentJoin" => "DepartmentSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "hcmJobJoin" => "HcmJobSearchRowBasic",
        "locationJoin" => "LocationSearchRowBasic",
        "managedJobJoin" => "JobSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "messagesFromJoin" => "MessageSearchRowBasic",
        "messagesToJoin" => "MessageSearchRowBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
        "subsidiaryJoin" => "SubsidiarySearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
