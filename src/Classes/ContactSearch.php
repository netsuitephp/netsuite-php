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

class ContactSearch extends SearchRecord {
    /**
     * @var \NetSuite\Classes\ContactSearchBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\PhoneCallSearchBasic
     */
    public $callJoin;
    /**
     * @var \NetSuite\Classes\CampaignSearchBasic
     */
    public $campaignResponseJoin;
    /**
     * @var \NetSuite\Classes\SupportCaseSearchBasic
     */
    public $caseJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchBasic
     */
    public $customerPrimaryJoin;
    /**
     * @var \NetSuite\Classes\CalendarEventSearchBasic
     */
    public $eventJoin;
    /**
     * @var \NetSuite\Classes\FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var \NetSuite\Classes\JobSearchBasic
     */
    public $jobJoin;
    /**
     * @var \NetSuite\Classes\JobSearchBasic
     */
    public $jobPrimaryJoin;
    /**
     * @var \NetSuite\Classes\MessageSearchBasic
     */
    public $messagesJoin;
    /**
     * @var \NetSuite\Classes\MessageSearchBasic
     */
    public $messagesFromJoin;
    /**
     * @var \NetSuite\Classes\MessageSearchBasic
     */
    public $messagesToJoin;
    /**
     * @var \NetSuite\Classes\OpportunitySearchBasic
     */
    public $opportunityJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchBasic
     */
    public $parentCustomerJoin;
    /**
     * @var \NetSuite\Classes\JobSearchBasic
     */
    public $parentJobJoin;
    /**
     * @var \NetSuite\Classes\PartnerSearchBasic
     */
    public $parentPartnerJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchBasic
     */
    public $parentVendorJoin;
    /**
     * @var \NetSuite\Classes\PartnerSearchBasic
     */
    public $partnerJoin;
    /**
     * @var \NetSuite\Classes\PartnerSearchBasic
     */
    public $partnerPrimaryJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchBasic
     */
    public $purchasedItemJoin;
    /**
     * @var \NetSuite\Classes\TaskSearchBasic
     */
    public $taskJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchBasic
     */
    public $upsellItemJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var \NetSuite\Classes\NoteSearchBasic
     */
    public $userNotesJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchBasic
     */
    public $vendorJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchBasic
     */
    public $vendorPrimaryJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchJoin[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "ContactSearchBasic",
        "callJoin" => "PhoneCallSearchBasic",
        "campaignResponseJoin" => "CampaignSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "customerPrimaryJoin" => "CustomerSearchBasic",
        "eventJoin" => "CalendarEventSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "jobJoin" => "JobSearchBasic",
        "jobPrimaryJoin" => "JobSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "messagesFromJoin" => "MessageSearchBasic",
        "messagesToJoin" => "MessageSearchBasic",
        "opportunityJoin" => "OpportunitySearchBasic",
        "parentCustomerJoin" => "CustomerSearchBasic",
        "parentJobJoin" => "JobSearchBasic",
        "parentPartnerJoin" => "PartnerSearchBasic",
        "parentVendorJoin" => "VendorSearchBasic",
        "partnerJoin" => "PartnerSearchBasic",
        "partnerPrimaryJoin" => "PartnerSearchBasic",
        "purchasedItemJoin" => "ItemSearchBasic",
        "taskJoin" => "TaskSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "upsellItemJoin" => "ItemSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "vendorJoin" => "VendorSearchBasic",
        "vendorPrimaryJoin" => "VendorSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
