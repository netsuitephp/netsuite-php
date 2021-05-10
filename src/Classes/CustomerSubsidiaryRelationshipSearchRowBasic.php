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

class CustomerSubsidiaryRelationshipSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $balance;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $depositbalance;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isprimarysub;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $primaryCurrency;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $unbilledorders;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "balance" => "SearchColumnDoubleField[]",
        "depositbalance" => "SearchColumnDoubleField[]",
        "entity" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isprimarysub" => "SearchColumnBooleanField[]",
        "primaryCurrency" => "SearchColumnSelectField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "unbilledorders" => "SearchColumnDoubleField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
