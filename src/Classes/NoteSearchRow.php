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

class NoteSearchRow extends SearchRow {
    /**
     * @var \NetSuite\Classes\NoteSearchRowBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $authorJoin;
    /**
     * @var \NetSuite\Classes\PhoneCallSearchRowBasic
     */
    public $callJoin;
    /**
     * @var \NetSuite\Classes\CampaignSearchRowBasic
     */
    public $campaignJoin;
    /**
     * @var \NetSuite\Classes\SupportCaseSearchRowBasic
     */
    public $caseJoin;
    /**
     * @var \NetSuite\Classes\ContactSearchRowBasic
     */
    public $contactJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $employeeJoin;
    /**
     * @var \NetSuite\Classes\EntitySearchRowBasic
     */
    public $entityJoin;
    /**
     * @var \NetSuite\Classes\CalendarEventSearchRowBasic
     */
    public $eventJoin;
    /**
     * @var \NetSuite\Classes\IssueSearchRowBasic
     */
    public $issueJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchRowBasic
     */
    public $itemJoin;
    /**
     * @var \NetSuite\Classes\OpportunitySearchRowBasic
     */
    public $opportunityJoin;
    /**
     * @var \NetSuite\Classes\OriginatingLeadSearchRowBasic
     */
    public $originatingLeadJoin;
    /**
     * @var \NetSuite\Classes\PartnerSearchRowBasic
     */
    public $partnerJoin;
    /**
     * @var \NetSuite\Classes\SolutionSearchRowBasic
     */
    public $solutionJoin;
    /**
     * @var \NetSuite\Classes\TaskSearchRowBasic
     */
    public $taskJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $transactionJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchRowBasic
     */
    public $vendorJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchRowBasic[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "NoteSearchRowBasic",
        "authorJoin" => "EmployeeSearchRowBasic",
        "callJoin" => "PhoneCallSearchRowBasic",
        "campaignJoin" => "CampaignSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "contactJoin" => "ContactSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "employeeJoin" => "EmployeeSearchRowBasic",
        "entityJoin" => "EntitySearchRowBasic",
        "eventJoin" => "CalendarEventSearchRowBasic",
        "issueJoin" => "IssueSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
        "partnerJoin" => "PartnerSearchRowBasic",
        "solutionJoin" => "SolutionSearchRowBasic",
        "taskJoin" => "TaskSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "vendorJoin" => "VendorSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
