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

class VendorPaymentApply {
    /**
     * @var boolean
     */
    public $apply;
    /**
     * @var integer
     */
    public $doc;
    /**
     * @var integer
     */
    public $line;
    /**
     * @var string
     */
    public $job;
    /**
     * @var string
     */
    public $applyDate;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $refNum;
    /**
     * @var float
     */
    public $total;
    /**
     * @var float
     */
    public $due;
    /**
     * @var string
     */
    public $currency;
    /**
     * @var string
     */
    public $discDate;
    /**
     * @var float
     */
    public $discAmt;
    /**
     * @var float
     */
    public $disc;
    /**
     * @var float
     */
    public $amount;
    static $paramtypesmap = array(
        "apply" => "boolean",
        "doc" => "integer",
        "line" => "integer",
        "job" => "string",
        "applyDate" => "dateTime",
        "type" => "string",
        "refNum" => "string",
        "total" => "float",
        "due" => "float",
        "currency" => "string",
        "discDate" => "dateTime",
        "discAmt" => "float",
        "disc" => "float",
        "amount" => "float",
    );
}
