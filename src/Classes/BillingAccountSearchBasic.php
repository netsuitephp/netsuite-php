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

class BillingAccountSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $billingSchedule;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $cashSaleForm;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $class;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $currency;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $customer;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $customerDefault;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $dateCreated;
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
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $frequency;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $idNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $inactive;
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
    public $invoiceForm;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastBillCycleDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastBillDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $nextBillCycleDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "billingSchedule" => "SearchMultiSelectField",
        "cashSaleForm" => "SearchMultiSelectField",
        "class" => "SearchMultiSelectField",
        "currency" => "SearchMultiSelectField",
        "customer" => "SearchMultiSelectField",
        "customerDefault" => "SearchBooleanField",
        "dateCreated" => "SearchDateField",
        "department" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "frequency" => "SearchEnumMultiSelectField",
        "idNumber" => "SearchStringField",
        "inactive" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "invoiceForm" => "SearchMultiSelectField",
        "lastBillCycleDate" => "SearchDateField",
        "lastBillDate" => "SearchDateField",
        "location" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "name" => "SearchStringField",
        "nextBillCycleDate" => "SearchDateField",
        "startDate" => "SearchDateField",
        "subsidiary" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
