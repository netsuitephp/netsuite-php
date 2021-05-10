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

class ItemVendor {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $vendor;
    /**
     * @var string
     */
    public $vendorCode;
    /**
     * @var string
     */
    public $vendorCurrencyName;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $vendorCurrency;
    /**
     * @var float
     */
    public $purchasePrice;
    /**
     * @var boolean
     */
    public $preferredVendor;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $schedule;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    static $paramtypesmap = array(
        "vendor" => "RecordRef",
        "vendorCode" => "string",
        "vendorCurrencyName" => "string",
        "vendorCurrency" => "RecordRef",
        "purchasePrice" => "float",
        "preferredVendor" => "boolean",
        "schedule" => "RecordRef",
        "subsidiary" => "RecordRef",
    );
}
