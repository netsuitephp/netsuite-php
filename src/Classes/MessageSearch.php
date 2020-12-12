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

class MessageSearch extends SearchRecord {
    /**
     * @var \NetSuite\Classes\MessageSearchBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\FileSearchBasic
     */
    public $attachmentsJoin;
    /**
     * @var \NetSuite\Classes\EntitySearchBasic
     */
    public $authorJoin;
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
     * @var \NetSuite\Classes\EntitySearchBasic
     */
    public $recipientJoin;
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
    static $paramtypesmap = array(
        "basic" => "MessageSearchBasic",
        "attachmentsJoin" => "FileSearchBasic",
        "authorJoin" => "EntitySearchBasic",
        "campaignJoin" => "CampaignSearchBasic",
        "caseJoin" => "SupportCaseSearchBasic",
        "contactJoin" => "ContactSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "employeeJoin" => "EmployeeSearchBasic",
        "entityJoin" => "EntitySearchBasic",
        "opportunityJoin" => "OpportunitySearchBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchBasic",
        "partnerJoin" => "PartnerSearchBasic",
        "recipientJoin" => "EntitySearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "vendorJoin" => "VendorSearchBasic",
    );
}
