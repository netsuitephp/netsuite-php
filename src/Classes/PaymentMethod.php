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

class PaymentMethod extends Record {
    /**
     * @var string
     */
    public $name;
    /**
     * @var boolean
     */
    public $creditCard;
    /**
     * @var boolean
     */
    public $undepFunds;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $account;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var boolean
     */
    public $isOnline;
    /**
     * @var \NetSuite\Classes\PaymentMethodVisualsList
     */
    public $visualsList;
    /**
     * @var boolean
     */
    public $isDebitCard;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $merchantAccountsList;
    /**
     * @var string
     */
    public $payPalEmailAddress;
    /**
     * @var string
     */
    public $expressCheckoutArrangement;
    /**
     * @var boolean
     */
    public $useExpressCheckout;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
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
