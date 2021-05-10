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

class VendorSubsidiaryRelationshipSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $balance;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $balanceBase;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $baseCurrency;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $creditLimit;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $entity;
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
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $inTransitBalance;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $inTransitBalanceBase;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isPrimarySub;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $primaryCurrency;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $taxItem;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $unbilledOrders;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $unbilledOrdersBase;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "balance" => "SearchDoubleField",
        "balanceBase" => "SearchDoubleField",
        "baseCurrency" => "SearchMultiSelectField",
        "creditLimit" => "SearchDoubleField",
        "entity" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "inTransitBalance" => "SearchDoubleField",
        "inTransitBalanceBase" => "SearchDoubleField",
        "isPrimarySub" => "SearchBooleanField",
        "primaryCurrency" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "taxItem" => "SearchMultiSelectField",
        "unbilledOrders" => "SearchDoubleField",
        "unbilledOrdersBase" => "SearchDoubleField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
