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

class ChargeSearchRow extends SearchRow {
    /**
     * @var \NetSuite\Classes\ChargeSearchRowBasic
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
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $chargeEmployeeJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchRowBasic
     */
    public $customerJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $invoiceJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchRowBasic
     */
    public $itemJoin;
    /**
     * @var \NetSuite\Classes\JobSearchRowBasic
     */
    public $jobJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $salesOrderJoin;
    /**
     * @var \NetSuite\Classes\TimeBillSearchRowBasic
     */
    public $timeJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchRowBasic
     */
    public $transactionJoin;
    /**
     * @var \NetSuite\Classes\UsageSearchRowBasic
     */
    public $usageJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchRowBasic
     */
    public $userJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchRowBasic[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "ChargeSearchRowBasic",
        "billingAccountJoin" => "BillingAccountSearchRowBasic",
        "billingScheduleJoin" => "BillingScheduleSearchRowBasic",
        "chargeEmployeeJoin" => "EmployeeSearchRowBasic",
        "customerJoin" => "CustomerSearchRowBasic",
        "invoiceJoin" => "TransactionSearchRowBasic",
        "itemJoin" => "ItemSearchRowBasic",
        "jobJoin" => "JobSearchRowBasic",
        "salesOrderJoin" => "TransactionSearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "usageJoin" => "UsageSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
