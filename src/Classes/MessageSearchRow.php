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

class MessageSearchRow extends SearchRow {
    public $basic;
    public $attachmentsJoin;
    public $authorJoin;
    public $campaignJoin;
    public $caseJoin;
    public $contactJoin;
    public $customerJoin;
    public $employeeJoin;
    public $entityJoin;
    public $opportunityJoin;
    public $originatingLeadJoin;
    public $partnerJoin;
    public $recipientJoin;
    public $transactionJoin;
    public $userJoin;
    public $vendorJoin;
    static $paramtypesmap = array(
        "basic" => "MessageSearchRowBasic",
        "attachmentsJoin" => "FileSearchRowBasic",
        "authorJoin" => "EntitySearchRowBasic",
        "campaignJoin" => "CampaignSearchRowBasic",
        "caseJoin" => "SupportCaseSearchRowBasic",
        "contactJoin" => "ContactSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "employeeJoin" => "EmployeeSearchRowBasic",
        "entityJoin" => "EntitySearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchRowBasic",
        "partnerJoin" => "PartnerSearchRowBasic",
        "recipientJoin" => "EntitySearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "vendorJoin" => "VendorSearchRowBasic",
    );
}
