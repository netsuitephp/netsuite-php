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

class PhoneCallSearchRow extends SearchRow {
    /**
     * @var \NetSuite\Classes\PhoneCallSearchRowBasic
     */
    public $basic;
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
     * @var \NetSuite\Classes\OpportunitySearchRowBasic
     */
    public $opportunityJoin;
    /**
     * @var \NetSuite\Classes\OriginatingLeadSearchRowBasic
     */
    public $originatingLeadJoin;
    /**
     * @var \NetSuite\Classes\EntitySearchRowBasic
     */
    public $participantJoin;
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
        "basic" => "PhoneCallSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "companyCustomerJoin" => "CustomerSearchRowBasic",
        "contactJoin" => "ContactSearchRowBasic",
        "employeeJoin" => "EmployeeSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
        "participantJoin" => "EntitySearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
