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

class EmployeeDirectDeposit {
    /**
     * @var integer
     */
    public $id;
    /**
     * @var boolean
     */
    public $netAccount;
    /**
     * @var boolean
     */
    public $savingsAccount;
    /**
     * @var boolean
     */
    public $accountPrenoted;
    /**
     * @var \NetSuite\Classes\EmployeeDirectDepositAccountStatus
     */
    public $accountStatus;
    /**
     * @var string
     */
    public $bankName;
    /**
     * @var string
     */
    public $bankId;
    /**
     * @var string
     */
    public $bankNumber;
    /**
     * @var string
     */
    public $bankRoutingNumber;
    /**
     * @var string
     */
    public $bankAccountNumber;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var boolean
     */
    public $inactive;
    static $paramtypesmap = array(
        "id" => "integer",
        "netAccount" => "boolean",
        "savingsAccount" => "boolean",
        "accountPrenoted" => "boolean",
        "accountStatus" => "EmployeeDirectDepositAccountStatus",
        "bankName" => "string",
        "bankId" => "string",
        "bankNumber" => "string",
        "bankRoutingNumber" => "string",
        "bankAccountNumber" => "string",
        "amount" => "float",
        "inactive" => "boolean",
    );
}
