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
 * generated:  2020-02-19 09:58:55 AM CST
 */

namespace NetSuite\Classes;

class VendorSubsidiaryRelationship extends Record {
    public $baseCurrency;
    public $creditLimit;
    public $entity;
    public $isPrimarySub;
    public $primaryCurrency;
    public $subsidiary;
    public $taxItem;
    public $customFieldList;
    public $internalId;
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
