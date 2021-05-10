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

class ChargeSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $amount;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $billingAccount;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $billingItem;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $billTo;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $chargeDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $chargeType;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $class;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $department;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $modifiedDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $postingPeriod;
    /**
     * @var \NetSuite\Classes\PostingPeriodDate
     */
    public $postingPeriodRelative;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $quantity;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $rate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $rule;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $runId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $salesOrder;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $stage;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subscriptionLine;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $use;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "amount" => "SearchDoubleField",
        "billingAccount" => "SearchMultiSelectField",
        "billingItem" => "SearchMultiSelectField",
        "billTo" => "SearchMultiSelectField",
        "chargeDate" => "SearchDateField",
        "chargeType" => "SearchMultiSelectField",
        "class" => "SearchMultiSelectField",
        "createdDate" => "SearchDateField",
        "currency" => "SearchMultiSelectField",
        "department" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "location" => "SearchMultiSelectField",
        "modifiedDate" => "SearchDateField",
        "postingPeriod" => "RecordRef",
        "postingPeriodRelative" => "PostingPeriodDate",
        "quantity" => "SearchDoubleField",
        "rate" => "SearchDoubleField",
        "rule" => "SearchMultiSelectField",
        "runId" => "SearchStringField",
        "salesOrder" => "SearchLongField",
        "stage" => "SearchEnumMultiSelectField",
        "subscriptionLine" => "SearchMultiSelectField",
        "use" => "SearchEnumMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
