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
 * generated:  2019-02-27 03:26:43 PM PST
 */

namespace NetSuite\Classes;

class PaymentCard extends Record {
    public $lastFourDigits;
    public $issuerIdNumber;
    public $entity;
    public $mask;
    public $paymentMethod;
    public $memo;
    public $state;
    public $isInactive;
    public $preserveOnFile;
    public $isDefault;
    public $cardNumber;
    public $expirationDate;
    public $cardBrand;
    public $cardType;
    public $nameOnCard;
    public $street;
    public $zipCode;
    public $validFromDate;
    public $issueNumber;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "lastFourDigits" => "string",
        "issuerIdNumber" => "string",
        "entity" => "RecordRef",
        "mask" => "string",
        "paymentMethod" => "RecordRef",
        "memo" => "string",
        "state" => "PaymentInstrumentState",
        "isInactive" => "boolean",
        "preserveOnFile" => "boolean",
        "isDefault" => "boolean",
        "cardNumber" => "string",
        "expirationDate" => "dateTime",
        "cardBrand" => "PaymentCardBrand",
        "cardType" => "PaymentCardType",
        "nameOnCard" => "string",
        "street" => "string",
        "zipCode" => "string",
        "validFromDate" => "dateTime",
        "issueNumber" => "string",
        "internalId" => "string",
        "externalId" => "string",
    );
}
