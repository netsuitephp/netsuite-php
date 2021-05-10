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

class ItemFulfillmentPackageUps {
    /**
     * @var float
     */
    public $packageWeightUps;
    /**
     * @var string
     */
    public $packageDescrUps;
    /**
     * @var string
     */
    public $packageTrackingNumberUps;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentPackageUpsPackagingUps
     */
    public $packagingUps;
    /**
     * @var boolean
     */
    public $useInsuredValueUps;
    /**
     * @var float
     */
    public $insuredValueUps;
    /**
     * @var string
     */
    public $reference1Ups;
    /**
     * @var string
     */
    public $reference2Ups;
    /**
     * @var integer
     */
    public $packageLengthUps;
    /**
     * @var integer
     */
    public $packageWidthUps;
    /**
     * @var integer
     */
    public $packageHeightUps;
    /**
     * @var boolean
     */
    public $additionalHandlingUps;
    /**
     * @var boolean
     */
    public $useCodUps;
    /**
     * @var float
     */
    public $codAmountUps;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentPackageUpsCodMethodUps
     */
    public $codMethodUps;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentPackageUpsDeliveryConfUps
     */
    public $deliveryConfUps;
    static $paramtypesmap = array(
        "packageWeightUps" => "float",
        "packageDescrUps" => "string",
        "packageTrackingNumberUps" => "string",
        "packagingUps" => "ItemFulfillmentPackageUpsPackagingUps",
        "useInsuredValueUps" => "boolean",
        "insuredValueUps" => "float",
        "reference1Ups" => "string",
        "reference2Ups" => "string",
        "packageLengthUps" => "integer",
        "packageWidthUps" => "integer",
        "packageHeightUps" => "integer",
        "additionalHandlingUps" => "boolean",
        "useCodUps" => "boolean",
        "codAmountUps" => "float",
        "codMethodUps" => "ItemFulfillmentPackageUpsCodMethodUps",
        "deliveryConfUps" => "ItemFulfillmentPackageUpsDeliveryConfUps",
    );
}
