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
 * generated:  2019-06-12 10:27:00 AM PDT
 */

namespace NetSuite\Classes;

class GeneralToken extends Record {
    public $entity;
    public $mask;
    public $supportedOperationsList;
    public $paymentMethod;
    public $memo;
    public $state;
    public $isInactive;
    public $preserveOnFile;
    public $isDefault;
    public $token;
    public $tokenExpirationDate;
    public $tokenFamily;
    public $tokenNamespace;
    public $internalId;
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
