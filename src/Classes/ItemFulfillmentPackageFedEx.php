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

class ItemFulfillmentPackageFedEx {
    /**
     * @var float
     */
    public $packageWeightFedEx;
    /**
     * @var float
     */
    public $dryIceWeightFedEx;
    /**
     * @var string
     */
    public $packageTrackingNumberFedEx;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentPackageFedExPackagingFedEx
     */
    public $packagingFedEx;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentPackageFedExAdmPackageTypeFedEx
     */
    public $admPackageTypeFedEx;
    /**
     * @var boolean
     */
    public $isNonStandardContainerFedEx;
    /**
     * @var boolean
     */
    public $isAlcoholFedEx;
    /**
     * @var \NetSuite\Classes\AlcoholRecipientType
     */
    public $alcoholRecipientTypeFedEx;
    /**
     * @var boolean
     */
    public $isNonHazLithiumFedEx;
    /**
     * @var float
     */
    public $insuredValueFedEx;
    /**
     * @var boolean
     */
    public $useInsuredValueFedEx;
    /**
     * @var string
     */
    public $reference1FedEx;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentPackageFedExPriorityAlertTypeFedEx
     */
    public $priorityAlertTypeFedEx;
    /**
     * @var string
     */
    public $priorityAlertContentFedEx;
    /**
     * @var integer
     */
    public $packageLengthFedEx;
    /**
     * @var integer
     */
    public $packageWidthFedEx;
    /**
     * @var integer
     */
    public $packageHeightFedEx;
    /**
     * @var boolean
     */
    public $useCodFedEx;
    /**
     * @var float
     */
    public $codAmountFedEx;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentPackageFedExCodMethodFedEx
     */
    public $codMethodFedEx;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentPackageFedExCodFreightTypeFedEx
     */
    public $codFreightTypeFedEx;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentPackageFedExDeliveryConfFedEx
     */
    public $deliveryConfFedEx;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentPackageFedExSignatureOptionsFedEx
     */
    public $signatureOptionsFedEx;
    /**
     * @var string
     */
    public $signatureReleaseFedEx;
    /**
     * @var string
     */
    public $authorizationNumberFedEx;
    static $paramtypesmap = array(
        "packageWeightFedEx" => "float",
        "dryIceWeightFedEx" => "float",
        "packageTrackingNumberFedEx" => "string",
        "packagingFedEx" => "ItemFulfillmentPackageFedExPackagingFedEx",
        "admPackageTypeFedEx" => "ItemFulfillmentPackageFedExAdmPackageTypeFedEx",
        "isNonStandardContainerFedEx" => "boolean",
        "isAlcoholFedEx" => "boolean",
        "alcoholRecipientTypeFedEx" => "AlcoholRecipientType",
        "isNonHazLithiumFedEx" => "boolean",
        "insuredValueFedEx" => "float",
        "useInsuredValueFedEx" => "boolean",
        "reference1FedEx" => "string",
        "priorityAlertTypeFedEx" => "ItemFulfillmentPackageFedExPriorityAlertTypeFedEx",
        "priorityAlertContentFedEx" => "string",
        "packageLengthFedEx" => "integer",
        "packageWidthFedEx" => "integer",
        "packageHeightFedEx" => "integer",
        "useCodFedEx" => "boolean",
        "codAmountFedEx" => "float",
        "codMethodFedEx" => "ItemFulfillmentPackageFedExCodMethodFedEx",
        "codFreightTypeFedEx" => "ItemFulfillmentPackageFedExCodFreightTypeFedEx",
        "deliveryConfFedEx" => "ItemFulfillmentPackageFedExDeliveryConfFedEx",
        "signatureOptionsFedEx" => "ItemFulfillmentPackageFedExSignatureOptionsFedEx",
        "signatureReleaseFedEx" => "string",
        "authorizationNumberFedEx" => "string",
    );
}
