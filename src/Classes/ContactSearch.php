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

class ContactSearch extends SearchRecord {
    public $basic;
    public $callJoin;
    public $campaignResponseJoin;
    public $caseJoin;
    public $customerJoin;
    public $customerPrimaryJoin;
    public $eventJoin;
    public $fileJoin;
    public $jobJoin;
    public $jobPrimaryJoin;
    public $messagesJoin;
    public $messagesFromJoin;
    public $messagesToJoin;
    public $opportunityJoin;
    public $parentCustomerJoin;
    public $parentJobJoin;
    public $parentPartnerJoin;
    public $parentVendorJoin;
    public $partnerJoin;
    public $partnerPrimaryJoin;
    public $purchasedItemJoin;
    public $taskJoin;
    public $transactionJoin;
    public $upsellItemJoin;
    public $userJoin;
    public $userNotesJoin;
    public $vendorJoin;
    public $vendorPrimaryJoin;
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
