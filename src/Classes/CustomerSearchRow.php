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

class CustomerSearchRow extends SearchRow {
    /**
     * @var \NetSuite\Classes\CustomerSearchRowBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\BillingAccountSearchRowBasic
     */
    public $billingAccountJoin;
    /**
     * @var \NetSuite\Classes\BillingScheduleSearchRowBasic
     */
    public $billingScheduleJoin;
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
     * @var \NetSuite\Classes\ContactSearchRowBasic
     */
    public $contactJoin;
    /**
     * @var \NetSuite\Classes\ContactSearchRowBasic
     */
    public $contactPrimaryJoin;
    /**
     * @var \NetSuite\Classes\CalendarEventSearchRowBasic
     */
    public $eventJoin;
    /**
     * @var \NetSuite\Classes\FileSearchRowBasic
     */
    public $fileJoin;
    /**
     * @var \NetSuite\Classes\FileSearchRowBasic
     */
    public $hostedPageJoin;
    /**
     * @var \NetSuite\Classes\JobSearchRowBasic
     */
    public $jobJoin;
    /**
     * @var \NetSuite\Classes\CampaignSearchRowBasic
     */
    public $leadSourceJoin;
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
     * @var \NetSuite\Classes\MseSubsidiarySearchRowBasic
     */
    public $mseSubsidiaryJoin;
    /**
     * @var \NetSuite\Classes\OpportunitySearchRowBasic
     */
    public $opportunityJoin;
    /**
     * @var \NetSuite\Classes\OriginatingLeadSearchRowBasic
     */
    public $originatingLeadJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchRowBasic
     */
    public $parentCustomerJoin;
    /**
     * @var \NetSuite\Classes\PartnerSearchRowBasic
     */
    public $partnerJoin;
    /**
     * @var \NetSuite\Classes\PaymentInstrumentSearchRowBasic
     */
    public $paymentInstrumentJoin;
    /**
     * @var \NetSuite\Classes\PricingSearchRowBasic
     */
    public $pricingJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchRowBasic
     */
    public $purchasedItemJoin;
    /**
     * @var \NetSuite\Classes\ResourceAllocationSearchRowBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $salesRepJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchRowBasic
     */
    public $subCustomerJoin;
    /**
     * @var \NetSuite\Classes\TaskSearchRowBasic
     */
    public $taskJoin;
    /**
     * @var \NetSuite\Classes\EntityTaxRegistrationSearchRowBasic
     */
    public $taxRegistrationJoin;
    /**
     * @var \NetSuite\Classes\TimeBillSearchRowBasic
     */
    public $timeJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchRowBasic
     */
    public $topLevelParentJoin;
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
     * @var \NetSuite\Classes\SiteCategorySearchRowBasic
     */
    public $webSiteCategoryJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchRowBasic
     */
    public $webSiteItemJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchRowBasic[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "CustomerSearchRowBasic",
        "billingAccountJoin" => "BillingAccountSearchRowBasic",
        "billingScheduleJoin" => "BillingScheduleSearchRowBasic",
        "callJoin" => "PhoneCallSearchRowBasic",
        "campaignResponseJoin" => "CampaignSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "contactJoin" => "ContactSearchRowBasic",
        "contactPrimaryJoin" => "ContactSearchRowBasic",
        "eventJoin" => "CalendarEventSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "hostedPageJoin" => "FileSearchRowBasic",
        "jobJoin" => "JobSearchRowBasic",
        "leadSourceJoin" => "CampaignSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "messagesFromJoin" => "MessageSearchRowBasic",
        "messagesToJoin" => "MessageSearchRowBasic",
        "mseSubsidiaryJoin" => "MseSubsidiarySearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
        "parentCustomerJoin" => "CustomerSearchRowBasic",
        "partnerJoin" => "PartnerSearchRowBasic",
        "paymentInstrumentJoin" => "PaymentInstrumentSearchRowBasic",
        "pricingJoin" => "PricingSearchRowBasic",
        "purchasedItemJoin" => "ItemSearchRowBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
        "salesRepJoin" => "EmployeeSearchRowBasic",
        "subCustomerJoin" => "CustomerSearchRowBasic",
        "taskJoin" => "TaskSearchRowBasic",
        "taxRegistrationJoin" => "EntityTaxRegistrationSearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "topLevelParentJoin" => "CustomerSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "upsellItemJoin" => "ItemSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "webSiteCategoryJoin" => "SiteCategorySearchRowBasic",
        "webSiteItemJoin" => "ItemSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
