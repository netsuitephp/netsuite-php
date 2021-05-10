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

class PaycheckPayTax {
    /**
     * @var integer
     */
    public $line;
    /**
     * @var boolean
     */
    public $apply;
    /**
     * @var string
     */
    public $payTax;
    /**
     * @var integer
     */
    public $payItem;
    /**
     * @var float
     */
    public $taxableWageBase;
    /**
     * @var float
     */
    public $taxedWageBase;
    /**
     * @var float
     */
    public $reportableWageBase;
    /**
     * @var boolean
     */
    public $isExempt;
    /**
     * @var boolean
     */
    public $isResidentTax;
    /**
     * @var float
     */
    public $amount;
    static $paramtypesmap = array(
        "line" => "integer",
        "apply" => "boolean",
        "payTax" => "string",
        "payItem" => "integer",
        "taxableWageBase" => "float",
        "taxedWageBase" => "float",
        "reportableWageBase" => "float",
        "isExempt" => "boolean",
        "isResidentTax" => "boolean",
        "amount" => "float",
    );
}
