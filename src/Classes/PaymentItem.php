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

class PaymentItem extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $description;
    public $paymentMethod;
    public $undepFunds;
    public $includeChildren;
    public $issueProduct;
    public $account;
    public $customForm;
    public $itemId;
    public $displayName;
    public $isInactive;
    public $availableToPartners;
    public $department;
    public $class;
    public $location;
    public $subsidiaryList;
    public $translationsList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "description" => "string",
        "paymentMethod" => "RecordRef",
        "undepFunds" => "boolean",
        "includeChildren" => "boolean",
        "issueProduct" => "RecordRef",
        "account" => "RecordRef",
        "customForm" => "RecordRef",
        "itemId" => "string",
        "displayName" => "string",
        "isInactive" => "boolean",
        "availableToPartners" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiaryList" => "RecordRefList",
        "translationsList" => "TranslationList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
