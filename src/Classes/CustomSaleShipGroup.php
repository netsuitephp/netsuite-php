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

class CustomSaleShipGroup {
    /**
     * @var string
     */
    public $sourceAddress;
    /**
     * @var string
     */
    public $destinationAddress;
    /**
     * @var string
     */
    public $shippingMethod;
    /**
     * @var float
     */
    public $shippingRate;
    /**
     * @var float
     */
    public $handlingRate;
    /**
     * @var integer
     */
    public $id;
    /**
     * @var string
     */
    public $isFulfilled;
    /**
     * @var float
     */
    public $weight;
    /**
     * @var string
     */
    public $sourceAddressRef;
    /**
     * @var string
     */
    public $destinationAddressRef;
    /**
     * @var string
     */
    public $shippingMethodRef;
    static $paramtypesmap = array(
        "sourceAddress" => "string",
        "destinationAddress" => "string",
        "shippingMethod" => "string",
        "shippingRate" => "float",
        "handlingRate" => "float",
        "id" => "integer",
        "isFulfilled" => "string",
        "weight" => "float",
        "sourceAddressRef" => "string",
        "destinationAddressRef" => "string",
        "shippingMethodRef" => "string",
    );
}
