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

class CustomerSearch extends SearchRecord {
    public $basic;
    public $billingAccountJoin;
    public $billingScheduleJoin;
    public $callJoin;
    public $campaignResponseJoin;
    public $caseJoin;
    public $contactJoin;
    public $contactPrimaryJoin;
    public $eventJoin;
    public $fileJoin;
    public $hostedPageJoin;
    public $jobJoin;
    public $leadSourceJoin;
    public $messagesJoin;
    public $messagesFromJoin;
    public $messagesToJoin;
    public $opportunityJoin;
    public $originatingLeadJoin;
    public $parentCustomerJoin;
    public $partnerJoin;
    public $pricingJoin;
    public $purchasedItemJoin;
    public $resourceAllocationJoin;
    public $salesRepJoin;
    public $subCustomerJoin;
    public $taskJoin;
    public $timeJoin;
    public $topLevelParentJoin;
    public $transactionJoin;
    public $upsellItemJoin;
    public $userJoin;
    public $userNotesJoin;
    public $webSiteCategoryJoin;
    public $webSiteItemJoin;
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "CustomerSearchBasic",
        "billingAccountJoin" => "BillingAccountSearchBasic",
        "billingScheduleJoin" => "BillingScheduleSearchBasic",
        "callJoin" => "PhoneCallSearchBasic",
        "campaignResponseJoin" => "CampaignSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "contactJoin" => "ContactSearchBasic",
        "contactPrimaryJoin" => "ContactSearchBasic",
        "eventJoin" => "CalendarEventSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "hostedPageJoin" => "FileSearchBasic",
        "jobJoin" => "JobSearchBasic",
        "leadSourceJoin" => "CampaignSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "messagesFromJoin" => "MessageSearchBasic",
        "messagesToJoin" => "MessageSearchBasic",
        "opportunityJoin" => "OpportunitySearchBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchBasic",
        "parentCustomerJoin" => "CustomerSearchBasic",
        "partnerJoin" => "PartnerSearchBasic",
        "pricingJoin" => "PricingSearchBasic",
        "purchasedItemJoin" => "ItemSearchBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchBasic",
        "salesRepJoin" => "EmployeeSearchBasic",
        "subCustomerJoin" => "CustomerSearchBasic",
        "taskJoin" => "TaskSearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "topLevelParentJoin" => "CustomerSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "upsellItemJoin" => "ItemSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "webSiteCategoryJoin" => "SiteCategorySearchBasic",
        "webSiteItemJoin" => "ItemSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
