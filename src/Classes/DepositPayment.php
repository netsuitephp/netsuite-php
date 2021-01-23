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

class DepositPayment {
    /**
     * @var boolean
     */
    public $deposit;
    /**
     * @var integer
     */
    public $id;
    /**
     * @var string
     */
    public $docDate;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $docNumber;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $paymentMethod;
    /**
     * @var string
     */
    public $refNum;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $transactionAmount;
    /**
     * @var float
     */
    public $paymentAmount;
    /**
     * @var integer
     */
    public $lineId;
    static $paramtypesmap = array(
        "deposit" => "boolean",
        "id" => "integer",
        "docDate" => "dateTime",
        "type" => "string",
        "docNumber" => "string",
        "memo" => "string",
        "paymentMethod" => "RecordRef",
        "refNum" => "string",
        "entity" => "RecordRef",
        "currency" => "RecordRef",
        "transactionAmount" => "float",
        "paymentAmount" => "float",
        "lineId" => "integer",
    );
}
