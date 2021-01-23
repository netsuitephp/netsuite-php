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

class GeneralToken extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var string
     */
    public $mask;
    /**
     * @var \NetSuite\Classes\GeneralTokenSupportedOperationsListList
     */
    public $supportedOperationsList;
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
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "entity" => "RecordRef",
        "mask" => "string",
        "supportedOperationsList" => "GeneralTokenSupportedOperationsListList",
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
        "internalId" => "string",
        "externalId" => "string",
    );
}
