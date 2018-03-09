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

class GiftCertificateSearchRowBasic extends SearchRowBasic {
    public $amountRemaining;
    public $amtAvailBilled;
    public $createdDate;
    public $email;
    public $expirationDate;
    public $gcActive;
    public $giftCertCode;
    public $incomeAcct;
    public $internalId;
    public $item;
    public $liabilityAcct;
    public $message;
    public $name;
    public $originalAmount;
    public $purchaseDate;
    public $sender;
    public $customFieldList;
    static $paramtypesmap = array(
        "amountRemaining" => "SearchColumnDoubleField[]",
        "amtAvailBilled" => "SearchColumnDoubleField[]",
        "createdDate" => "SearchColumnDateField[]",
        "email" => "SearchColumnStringField[]",
        "expirationDate" => "SearchColumnDateField[]",
        "gcActive" => "SearchColumnBooleanField[]",
        "giftCertCode" => "SearchColumnStringField[]",
        "incomeAcct" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "item" => "SearchColumnSelectField[]",
        "liabilityAcct" => "SearchColumnStringField[]",
        "message" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "originalAmount" => "SearchColumnDoubleField[]",
        "purchaseDate" => "SearchColumnDateField[]",
        "sender" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
