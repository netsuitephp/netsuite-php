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

class PaymentMethod extends Record {
    public $name;
    public $creditCard;
    public $undepFunds;
    public $account;
    public $isInactive;
    public $isOnline;
    public $visualsList;
    public $isDebitCard;
    public $merchantAccountsList;
    public $payPalEmailAddress;
    public $expressCheckoutArrangement;
    public $useExpressCheckout;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "name" => "string",
        "creditCard" => "boolean",
        "undepFunds" => "boolean",
        "account" => "RecordRef",
        "isInactive" => "boolean",
        "isOnline" => "boolean",
        "visualsList" => "PaymentMethodVisualsList",
        "isDebitCard" => "boolean",
        "merchantAccountsList" => "RecordRefList",
        "payPalEmailAddress" => "string",
        "expressCheckoutArrangement" => "string",
        "useExpressCheckout" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );
}
