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
 * generated:  2020-12-11 06:57:10 PM PST
 */

namespace NetSuite\Classes;

class VendorSubsidiaryRelationship extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $baseCurrency;
    /**
     * @var float
     */
    public $creditLimit;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var boolean
     */
    public $isPrimarySub;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $primaryCurrency;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxItem;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "baseCurrency" => "RecordRef",
        "creditLimit" => "float",
        "entity" => "RecordRef",
        "isPrimarySub" => "boolean",
        "primaryCurrency" => "RecordRef",
        "subsidiary" => "RecordRef",
        "taxItem" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
