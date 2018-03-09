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

class GiftCertificateSearchBasic extends SearchRecordBasic {
    public $amountAvailableBilled;
    public $amountRemaining;
    public $createdDate;
    public $email;
    public $expirationDate;
    public $giftCertCode;
    public $incomeAccount;
    public $internalId;
    public $internalIdNumber;
    public $isActive;
    public $item;
    public $liabilityAccount;
    public $message;
    public $name;
    public $originalAmount;
    public $purchaseDate;
    public $sender;
    public $customFieldList;
    static $paramtypesmap = array(
        "amountAvailableBilled" => "SearchDoubleField",
        "amountRemaining" => "SearchDoubleField",
        "createdDate" => "SearchDateField",
        "email" => "SearchStringField",
        "expirationDate" => "SearchDateField",
        "giftCertCode" => "SearchStringField",
        "incomeAccount" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isActive" => "SearchBooleanField",
        "item" => "SearchMultiSelectField",
        "liabilityAccount" => "SearchMultiSelectField",
        "message" => "SearchStringField",
        "name" => "SearchStringField",
        "originalAmount" => "SearchDoubleField",
        "purchaseDate" => "SearchDateField",
        "sender" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
