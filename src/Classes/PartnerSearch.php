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

class PartnerSearch extends SearchRecord {
    public $basic;
    public $campaignResponseJoin;
    public $contactJoin;
    public $contactPrimaryJoin;
    public $customerJoin;
    public $fileJoin;
    public $messagesJoin;
    public $messagesFromJoin;
    public $messagesToJoin;
    public $opportunityJoin;
    public $transactionJoin;
    public $userJoin;
    public $userNotesJoin;
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "PartnerSearchBasic",
        "campaignResponseJoin" => "CampaignSearchBasic",
        "contactJoin" => "ContactSearchBasic",
        "contactPrimaryJoin" => "ContactSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "messagesFromJoin" => "MessageSearchBasic",
        "messagesToJoin" => "MessageSearchBasic",
        "opportunityJoin" => "OpportunitySearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
