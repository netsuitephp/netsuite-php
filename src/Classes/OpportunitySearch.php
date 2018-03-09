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

class OpportunitySearch extends SearchRecord {
    public $basic;
    public $actualJoin;
    public $callJoin;
    public $customerJoin;
    public $decisionMakerJoin;
    public $estimateJoin;
    public $eventJoin;
    public $fileJoin;
    public $itemJoin;
    public $leadSourceJoin;
    public $messagesJoin;
    public $orderJoin;
    public $originatingLeadJoin;
    public $partnerJoin;
    public $salesRepJoin;
    public $taskJoin;
    public $userNotesJoin;
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "OpportunitySearchBasic",
        "actualJoin" => "TransactionSearchBasic",
        "callJoin" => "PhoneCallSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "decisionMakerJoin" => "ContactSearchBasic",
        "estimateJoin" => "TransactionSearchBasic",
        "eventJoin" => "CalendarEventSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "leadSourceJoin" => "CampaignSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "orderJoin" => "TransactionSearchBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchBasic",
        "partnerJoin" => "PartnerSearchBasic",
        "salesRepJoin" => "EmployeeSearchBasic",
        "taskJoin" => "TaskSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
