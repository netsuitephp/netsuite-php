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

class Charge extends Record {
    public $customForm;
    public $salesOrder;
    public $billTo;
    public $billingAccount;
    public $stage;
    public $chargeDate;
    public $use;
    public $chargeType;
    public $projectTask;
    public $description;
    public $createdDate;
    public $timeRecord;
    public $rate;
    public $quantity;
    public $amount;
    public $billingItem;
    public $currency;
    public $transaction;
    public $transactionLine;
    public $class;
    public $department;
    public $location;
    public $salesOrderLine;
    public $subscriptionLine;
    public $invoice;
    public $invoiceLine;
    public $rule;
    public $runId;
    public $internalId;
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
