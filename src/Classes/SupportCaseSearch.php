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

class SupportCaseSearch extends SearchRecord {
    /**
     * @var \NetSuite\Classes\SupportCaseSearchBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\EntitySearchBasic
     */
    public $companyJoin;
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
     * @var \NetSuite\Classes\FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var \NetSuite\Classes\IssueSearchBasic
     */
    public $issueJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var \NetSuite\Classes\MessageSearchBasic
     */
    public $messagesJoin;
    /**
     * @var \NetSuite\Classes\TimeBillSearchBasic
     */
    public $timeJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var \NetSuite\Classes\NoteSearchBasic
     */
    public $userNotesJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchJoin[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "SupportCaseSearchBasic",
        "companyJoin" => "EntitySearchBasic",
        "contactJoin" => "ContactSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "employeeJoin" => "EmployeeSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "issueJoin" => "IssueSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
