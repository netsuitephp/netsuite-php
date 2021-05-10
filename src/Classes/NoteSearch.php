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

class NoteSearch extends SearchRecord {
    /**
     * @var \NetSuite\Classes\NoteSearchBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $authorJoin;
    /**
     * @var \NetSuite\Classes\PhoneCallSearchBasic
     */
    public $callJoin;
    /**
     * @var \NetSuite\Classes\CampaignSearchBasic
     */
    public $campaignJoin;
    /**
     * @var \NetSuite\Classes\SupportCaseSearchBasic
     */
    public $caseJoin;
    /**
     * @var \NetSuite\Classes\ContactSearchBasic
     */
    public $contactJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $employeeJoin;
    /**
     * @var \NetSuite\Classes\EntitySearchBasic
     */
    public $entityJoin;
    /**
     * @var \NetSuite\Classes\CalendarEventSearchBasic
     */
    public $eventJoin;
    /**
     * @var \NetSuite\Classes\IssueSearchBasic
     */
    public $issueJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var \NetSuite\Classes\OpportunitySearchBasic
     */
    public $opportunityJoin;
    /**
     * @var \NetSuite\Classes\OriginatingLeadSearchBasic
     */
    public $originatingLeadJoin;
    /**
     * @var \NetSuite\Classes\PartnerSearchBasic
     */
    public $partnerJoin;
    /**
     * @var \NetSuite\Classes\SolutionSearchBasic
     */
    public $solutionJoin;
    /**
     * @var \NetSuite\Classes\TaskSearchBasic
     */
    public $taskJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchBasic
     */
    public $vendorJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchJoin[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "NoteSearchBasic",
        "authorJoin" => "EmployeeSearchBasic",
        "callJoin" => "PhoneCallSearchBasic",
        "campaignJoin" => "CampaignSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "contactJoin" => "ContactSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "employeeJoin" => "EmployeeSearchBasic",
        "entityJoin" => "EntitySearchBasic",
        "eventJoin" => "CalendarEventSearchBasic",
        "issueJoin" => "IssueSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "opportunityJoin" => "OpportunitySearchBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchBasic",
        "partnerJoin" => "PartnerSearchBasic",
        "solutionJoin" => "SolutionSearchBasic",
        "taskJoin" => "TaskSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "vendorJoin" => "VendorSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
