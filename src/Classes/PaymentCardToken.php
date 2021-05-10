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

class PaymentCardToken extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var string
     */
    public $mask;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $paymentMethod;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\PaymentInstrumentState
     */
    public $state;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var boolean
     */
    public $preserveOnFile;
    /**
     * @var boolean
     */
    public $isDefault;
    /**
     * @var string
     */
    public $token;
    /**
     * @var string
     */
    public $tokenExpirationDate;
    /**
     * @var \NetSuite\Classes\TokenFamily
     */
    public $tokenFamily;
    /**
     * @var string
     */
    public $tokenNamespace;
    /**
     * @var string
     */
    public $cardIssuerIdNumber;
    /**
     * @var \NetSuite\Classes\PaymentCardBrand
     */
    public $cardBrand;
    /**
     * @var \NetSuite\Classes\PaymentCardType
     */
    public $cardType;
    /**
     * @var string
     */
    public $cardNameOnCard;
    /**
     * @var string
     */
    public $cardLastFourDigits;
    /**
     * @var string
     */
    public $cardExpirationDate;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "entity" => "RecordRef",
        "mask" => "string",
        "paymentMethod" => "RecordRef",
        "memo" => "string",
        "state" => "PaymentInstrumentState",
        "isInactive" => "boolean",
        "preserveOnFile" => "boolean",
        "isDefault" => "boolean",
        "token" => "string",
        "tokenExpirationDate" => "dateTime",
        "tokenFamily" => "TokenFamily",
        "tokenNamespace" => "string",
        "cardIssuerIdNumber" => "string",
        "cardBrand" => "PaymentCardBrand",
        "cardType" => "PaymentCardType",
        "cardNameOnCard" => "string",
        "cardLastFourDigits" => "string",
        "cardExpirationDate" => "dateTime",
        "internalId" => "string",
        "externalId" => "string",
    );
}
