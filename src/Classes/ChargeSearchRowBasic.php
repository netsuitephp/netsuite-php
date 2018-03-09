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

class ChargeSearchRowBasic extends SearchRowBasic {
    public $amount;
    public $billingAccount;
    public $billingItem;
    public $billTo;
    public $chargeDate;
    public $class;
    public $chargeType;
    public $createdDate;
    public $currency;
    public $department;
    public $description;
    public $externalId;
    public $internalId;
    public $location;
    public $modifiedDate;
    public $postingPeriod;
    public $quantity;
    public $rate;
    public $rule;
    public $runId;
    public $salesOrder;
    public $stage;
    public $subscriptionLine;
    public $use;
    public $customFieldList;
    static $paramtypesmap = array(
        "amount" => "SearchColumnDoubleField[]",
        "billingAccount" => "SearchColumnSelectField[]",
        "billingItem" => "SearchColumnSelectField[]",
        "billTo" => "SearchColumnSelectField[]",
        "chargeDate" => "SearchColumnDateField[]",
        "class" => "SearchColumnSelectField[]",
        "chargeType" => "SearchColumnSelectField[]",
        "createdDate" => "SearchColumnDateField[]",
        "currency" => "SearchColumnSelectField[]",
        "department" => "SearchColumnSelectField[]",
        "description" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "location" => "SearchColumnSelectField[]",
        "modifiedDate" => "SearchColumnDateField[]",
        "postingPeriod" => "SearchColumnStringField[]",
        "quantity" => "SearchColumnStringField[]",
        "rate" => "SearchColumnStringField[]",
        "rule" => "SearchColumnSelectField[]",
        "runId" => "SearchColumnStringField[]",
        "salesOrder" => "SearchColumnStringField[]",
        "stage" => "SearchColumnEnumSelectField[]",
        "subscriptionLine" => "SearchColumnSelectField[]",
        "use" => "SearchColumnEnumSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
