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

class PromotionCodeSearchBasic extends SearchRecordBasic {
    public $applyDiscountTo;
    public $code;
    public $description;
    public $discount;
    public $endDate;
    public $externalId;
    public $externalIdString;
    public $freeShipItem;
    public $internalId;
    public $internalIdNumber;
    public $isInactive;
    public $isPublic;
    public $item;
    public $location;
    public $name;
    public $partner;
    public $startDate;
    public $customFieldList;
    static $paramtypesmap = array(
        "applyDiscountTo" => "SearchEnumMultiSelectField",
        "code" => "SearchStringField",
        "description" => "SearchStringField",
        "discount" => "SearchMultiSelectField",
        "endDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "freeShipItem" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "isPublic" => "SearchBooleanField",
        "item" => "SearchMultiSelectField",
        "location" => "SearchMultiSelectField",
        "name" => "SearchStringField",
        "partner" => "SearchMultiSelectField",
        "startDate" => "SearchDateField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
