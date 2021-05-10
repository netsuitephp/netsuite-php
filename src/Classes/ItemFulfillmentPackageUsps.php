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

class ItemFulfillmentPackageUsps {
    /**
     * @var float
     */
    public $packageWeightUsps;
    /**
     * @var string
     */
    public $packageDescrUsps;
    /**
     * @var string
     */
    public $packageTrackingNumberUsps;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentPackageUspsPackagingUsps
     */
    public $packagingUsps;
    /**
     * @var boolean
     */
    public $useInsuredValueUsps;
    /**
     * @var float
     */
    public $insuredValueUsps;
    /**
     * @var string
     */
    public $reference1Usps;
    /**
     * @var string
     */
    public $reference2Usps;
    /**
     * @var integer
     */
    public $packageLengthUsps;
    /**
     * @var integer
     */
    public $packageWidthUsps;
    /**
     * @var integer
     */
    public $packageHeightUsps;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentPackageUspsDeliveryConfUsps
     */
    public $deliveryConfUsps;
    static $paramtypesmap = array(
        "packageWeightUsps" => "float",
        "packageDescrUsps" => "string",
        "packageTrackingNumberUsps" => "string",
        "packagingUsps" => "ItemFulfillmentPackageUspsPackagingUsps",
        "useInsuredValueUsps" => "boolean",
        "insuredValueUsps" => "float",
        "reference1Usps" => "string",
        "reference2Usps" => "string",
        "packageLengthUsps" => "integer",
        "packageWidthUsps" => "integer",
        "packageHeightUsps" => "integer",
        "deliveryConfUsps" => "ItemFulfillmentPackageUspsDeliveryConfUsps",
    );
}
