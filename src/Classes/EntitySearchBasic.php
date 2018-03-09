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

class EntitySearchBasic extends SearchRecordBasic {
    public $address;
    public $addressee;
    public $addressLabel;
    public $addressPhone;
    public $attention;
    public $city;
    public $comments;
    public $country;
    public $county;
    public $dateCreated;
    public $email;
    public $entityId;
    public $externalId;
    public $externalIdString;
    public $fax;
    public $giveAccess;
    public $globalSubscriptionStatus;
    public $image;
    public $internalId;
    public $internalIdNumber;
    public $isDefaultBilling;
    public $isDefaultShipping;
    public $isInactive;
    public $language;
    public $lastModifiedDate;
    public $level;
    public $permission;
    public $phone;
    public $phoneticName;
    public $state;
    public $subsidiary;
    public $type;
    public $zipCode;
    public $customFieldList;
    static $paramtypesmap = array(
        "address" => "SearchStringField",
        "addressee" => "SearchStringField",
        "addressLabel" => "SearchStringField",
        "addressPhone" => "SearchStringField",
        "attention" => "SearchStringField",
        "city" => "SearchStringField",
        "comments" => "SearchStringField",
        "country" => "SearchEnumMultiSelectField",
        "county" => "SearchStringField",
        "dateCreated" => "SearchDateField",
        "email" => "SearchStringField",
        "entityId" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "fax" => "SearchStringField",
        "giveAccess" => "SearchBooleanField",
        "globalSubscriptionStatus" => "SearchEnumMultiSelectField",
        "image" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isDefaultBilling" => "SearchBooleanField",
        "isDefaultShipping" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "language" => "SearchEnumMultiSelectField",
        "lastModifiedDate" => "SearchDateField",
        "level" => "SearchEnumMultiSelectField",
        "permission" => "SearchEnumMultiSelectField",
        "phone" => "SearchStringField",
        "phoneticName" => "SearchStringField",
        "state" => "SearchStringField",
        "subsidiary" => "SearchMultiSelectField",
        "type" => "SearchEnumMultiSelectField",
        "zipCode" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
