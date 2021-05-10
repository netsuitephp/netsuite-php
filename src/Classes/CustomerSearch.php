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

class CustomerSearch extends SearchRecord {
    /**
     * @var \NetSuite\Classes\CustomerSearchBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\BillingAccountSearchBasic
     */
    public $billingAccountJoin;
    /**
     * @var \NetSuite\Classes\BillingScheduleSearchBasic
     */
    public $billingScheduleJoin;
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
     * @var \NetSuite\Classes\ContactSearchBasic
     */
    public $contactJoin;
    /**
     * @var \NetSuite\Classes\ContactSearchBasic
     */
    public $contactPrimaryJoin;
    /**
     * @var \NetSuite\Classes\CalendarEventSearchBasic
     */
    public $eventJoin;
    /**
     * @var \NetSuite\Classes\FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var \NetSuite\Classes\FileSearchBasic
     */
    public $hostedPageJoin;
    /**
     * @var \NetSuite\Classes\JobSearchBasic
     */
    public $jobJoin;
    /**
     * @var \NetSuite\Classes\CampaignSearchBasic
     */
    public $leadSourceJoin;
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
     * @var \NetSuite\Classes\MseSubsidiarySearchBasic
     */
    public $mseSubsidiaryJoin;
    /**
     * @var \NetSuite\Classes\OpportunitySearchBasic
     */
    public $opportunityJoin;
    /**
     * @var \NetSuite\Classes\OriginatingLeadSearchBasic
     */
    public $originatingLeadJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchBasic
     */
    public $parentCustomerJoin;
    /**
     * @var \NetSuite\Classes\PartnerSearchBasic
     */
    public $partnerJoin;
    /**
     * @var \NetSuite\Classes\PaymentInstrumentSearchBasic
     */
    public $paymentInstrumentJoin;
    /**
     * @var \NetSuite\Classes\PricingSearchBasic
     */
    public $pricingJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchBasic
     */
    public $purchasedItemJoin;
    /**
     * @var \NetSuite\Classes\ResourceAllocationSearchBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $salesRepJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchBasic
     */
    public $subCustomerJoin;
    /**
     * @var \NetSuite\Classes\TaskSearchBasic
     */
    public $taskJoin;
    /**
     * @var \NetSuite\Classes\EntityTaxRegistrationSearchBasic
     */
    public $taxRegistrationJoin;
    /**
     * @var \NetSuite\Classes\TimeBillSearchBasic
     */
    public $timeJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchBasic
     */
    public $topLevelParentJoin;
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
     * @var \NetSuite\Classes\SiteCategorySearchBasic
     */
    public $webSiteCategoryJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchBasic
     */
    public $webSiteItemJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchJoin[]
     */
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
        "mseSubsidiaryJoin" => "MseSubsidiarySearchBasic",
        "opportunityJoin" => "OpportunitySearchBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchBasic",
        "parentCustomerJoin" => "CustomerSearchBasic",
        "partnerJoin" => "PartnerSearchBasic",
        "paymentInstrumentJoin" => "PaymentInstrumentSearchBasic",
        "pricingJoin" => "PricingSearchBasic",
        "purchasedItemJoin" => "ItemSearchBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchBasic",
        "salesRepJoin" => "EmployeeSearchBasic",
        "subCustomerJoin" => "CustomerSearchBasic",
        "taskJoin" => "TaskSearchBasic",
        "taxRegistrationJoin" => "EntityTaxRegistrationSearchBasic",
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
