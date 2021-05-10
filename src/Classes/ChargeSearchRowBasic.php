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

class ChargeSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $amount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $billingAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $billingItem;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $billTo;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $chargeDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $chargeType;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $class;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $department;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $description;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $modifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $postingPeriod;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $quantity;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $rate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $rule;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $runId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $salesOrder;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $stage;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subscriptionLine;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $use;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "amount" => "SearchColumnDoubleField[]",
        "billingAccount" => "SearchColumnSelectField[]",
        "billingItem" => "SearchColumnSelectField[]",
        "billTo" => "SearchColumnSelectField[]",
        "chargeDate" => "SearchColumnDateField[]",
        "chargeType" => "SearchColumnSelectField[]",
        "class" => "SearchColumnSelectField[]",
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
