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

class TaxDetails {
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var string
     */
    public $lineType;
    /**
     * @var string
     */
    public $lineName;
    /**
     * @var float
     */
    public $netAmount;
    /**
     * @var float
     */
    public $grossAmount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxCode;
    /**
     * @var float
     */
    public $taxBasis;
    /**
     * @var float
     */
    public $taxRate;
    /**
     * @var float
     */
    public $taxAmount;
    /**
     * @var string
     */
    public $calcDetail;
    static $paramtypesmap = array(
        "taxDetailsReference" => "string",
        "lineType" => "string",
        "lineName" => "string",
        "netAmount" => "float",
        "grossAmount" => "float",
        "taxType" => "RecordRef",
        "taxCode" => "RecordRef",
        "taxBasis" => "float",
        "taxRate" => "float",
        "taxAmount" => "float",
        "calcDetail" => "string",
    );
}
