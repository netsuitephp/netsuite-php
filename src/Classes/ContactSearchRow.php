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

class ContactSearchRow extends SearchRow {
    /**
     * @var \NetSuite\Classes\ContactSearchRowBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\PhoneCallSearchRowBasic
     */
    public $callJoin;
    /**
     * @var \NetSuite\Classes\CampaignSearchRowBasic
     */
    public $campaignResponseJoin;
    /**
     * @var \NetSuite\Classes\SupportCaseSearchRowBasic
     */
    public $caseJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchRowBasic
     */
    public $customerPrimaryJoin;
    /**
     * @var \NetSuite\Classes\CalendarEventSearchRowBasic
     */
    public $eventJoin;
    /**
     * @var \NetSuite\Classes\FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var \NetSuite\Classes\JobSearchRowBasic
     */
    public $jobJoin;
    /**
     * @var \NetSuite\Classes\JobSearchRowBasic
     */
    public $jobPrimaryJoin;
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
     * @var \NetSuite\Classes\OpportunitySearchRowBasic
     */
    public $opportunityJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchRowBasic
     */
    public $parentCustomerJoin;
    /**
     * @var \NetSuite\Classes\JobSearchRowBasic
     */
    public $parentJobJoin;
    /**
     * @var \NetSuite\Classes\PartnerSearchRowBasic
     */
    public $parentPartnerJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchRowBasic
     */
    public $parentVendorJoin;
    /**
     * @var \NetSuite\Classes\PartnerSearchRowBasic
     */
    public $partnerJoin;
    /**
     * @var \NetSuite\Classes\PartnerSearchRowBasic
     */
    public $partnerPrimaryJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchRowBasic
     */
    public $purchasedItemJoin;
    /**
     * @var \NetSuite\Classes\TaskSearchRowBasic
     */
    public $taskJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $transactionJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchRowBasic
     */
    public $upsellItemJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var \NetSuite\Classes\NoteSearchRowBasic
     */
    public $userNotesJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchRowBasic
     */
    public $vendorJoin;
    /**
     * @var \NetSuite\Classes\VendorSearchRowBasic
     */
    public $vendorPrimaryJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchRowBasic[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "ContactSearchRowBasic",
        "callJoin" => "PhoneCallSearchRowBasic",
        "campaignResponseJoin" => "CampaignSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "customerPrimaryJoin" => "CustomerSearchRowBasic",
        "eventJoin" => "CalendarEventSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "jobJoin" => "JobSearchRowBasic",
        "jobPrimaryJoin" => "JobSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "messagesFromJoin" => "MessageSearchRowBasic",
        "messagesToJoin" => "MessageSearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "parentCustomerJoin" => "CustomerSearchRowBasic",
        "parentJobJoin" => "JobSearchRowBasic",
        "parentPartnerJoin" => "PartnerSearchRowBasic",
        "parentVendorJoin" => "VendorSearchRowBasic",
        "partnerJoin" => "PartnerSearchRowBasic",
        "partnerPrimaryJoin" => "PartnerSearchRowBasic",
        "purchasedItemJoin" => "ItemSearchRowBasic",
        "taskJoin" => "TaskSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "upsellItemJoin" => "ItemSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "vendorJoin" => "VendorSearchRowBasic",
        "vendorPrimaryJoin" => "VendorSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
