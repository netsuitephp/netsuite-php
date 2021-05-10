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

class TaskSearchRow extends SearchRow {
    /**
     * @var \NetSuite\Classes\TaskSearchRowBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $assignedJoin;
    /**
     * @var \NetSuite\Classes\SupportCaseSearchRowBasic
     */
    public $caseJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchRowBasic
     */
    public $companyCustomerJoin;
    /**
     * @var \NetSuite\Classes\ContactSearchRowBasic
     */
    public $contactJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $employeeJoin;
    /**
     * @var \NetSuite\Classes\FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var \NetSuite\Classes\JobSearchRowBasic
     */
    public $jobJoin;
    /**
     * @var \NetSuite\Classes\OpportunitySearchRowBasic
     */
    public $opportunityJoin;
    /**
     * @var \NetSuite\Classes\OriginatingLeadSearchRowBasic
     */
    public $originatingLeadJoin;
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
        "basic" => "TaskSearchRowBasic",
        "assignedJoin" => "EmployeeSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "companyCustomerJoin" => "CustomerSearchRowBasic",
        "contactJoin" => "ContactSearchRowBasic",
        "employeeJoin" => "EmployeeSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "jobJoin" => "JobSearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
