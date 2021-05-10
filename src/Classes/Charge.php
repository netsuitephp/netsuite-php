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

class Charge extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesOrder;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billTo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billingAccount;
    /**
     * @var \NetSuite\Classes\ChargeStage
     */
    public $stage;
    /**
     * @var string
     */
    public $chargeDate;
    /**
     * @var \NetSuite\Classes\ChargeUse
     */
    public $use;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $chargeType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $projectTask;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $timeRecord;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billingItem;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $transaction;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $transactionLine;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $salesOrderLine;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subscriptionLine;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $invoice;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $invoiceLine;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $rule;
    /**
     * @var string
     */
    public $runId;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "salesOrder" => "RecordRef",
        "billTo" => "RecordRef",
        "billingAccount" => "RecordRef",
        "stage" => "ChargeStage",
        "chargeDate" => "dateTime",
        "use" => "ChargeUse",
        "chargeType" => "RecordRef",
        "projectTask" => "RecordRef",
        "description" => "string",
        "createdDate" => "dateTime",
        "timeRecord" => "RecordRef",
        "rate" => "string",
        "quantity" => "float",
        "amount" => "float",
        "billingItem" => "RecordRef",
        "currency" => "RecordRef",
        "transaction" => "RecordRef",
        "transactionLine" => "RecordRef",
        "class" => "RecordRef",
        "department" => "RecordRef",
        "location" => "RecordRef",
        "salesOrderLine" => "RecordRef",
        "subscriptionLine" => "RecordRef",
        "invoice" => "RecordRef",
        "invoiceLine" => "RecordRef",
        "rule" => "RecordRef",
        "runId" => "string",
        "internalId" => "string",
        "externalId" => "string",
    );
}
