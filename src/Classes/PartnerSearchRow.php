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

class PartnerSearchRow extends SearchRow {
    /**
     * @var \NetSuite\Classes\PartnerSearchRowBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\CampaignSearchRowBasic
     */
    public $campaignResponseJoin;
    /**
     * @var \NetSuite\Classes\ContactSearchRowBasic
     */
    public $contactJoin;
    /**
     * @var \NetSuite\Classes\ContactSearchRowBasic
     */
    public $contactPrimaryJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var \NetSuite\Classes\FileSearchRowBasic
     */
    public $fileJoin;
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
     * @var \NetSuite\Classes\EntityTaxRegistrationSearchRowBasic
     */
    public $taxRegistrationJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $transactionJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var \NetSuite\Classes\NoteSearchRowBasic
     */
    public $userNotesJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchRowBasic[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "PartnerSearchRowBasic",
        "campaignResponseJoin" => "CampaignSearchRowBasic",
        "contactJoin" => "ContactSearchRowBasic",
        "contactPrimaryJoin" => "ContactSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "messagesFromJoin" => "MessageSearchRowBasic",
        "messagesToJoin" => "MessageSearchRowBasic",
        "opportunityJoin" => "OpportunitySearchRowBasic",
        "taxRegistrationJoin" => "EntityTaxRegistrationSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
