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
 * generated:  2017-08-01 09:12:52 PM UTC
 */

namespace NetSuite\Classes;

class ItemFulfillmentPackageFedEx {
    public $packageWeightFedEx;
    public $dryIceWeightFedEx;
    public $packageTrackingNumberFedEx;
    public $packagingFedEx;
    public $admPackageTypeFedEx;
    public $isNonStandardContainerFedEx;
    public $isAlcoholFedEx;
    public $alcoholRecipientTypeFedEx;
    public $isNonHazLithiumFedEx;
    public $insuredValueFedEx;
    public $useInsuredValueFedEx;
    public $reference1FedEx;
    public $priorityAlertTypeFedEx;
    public $priorityAlertContentFedEx;
    public $packageLengthFedEx;
    public $packageWidthFedEx;
    public $packageHeightFedEx;
    public $useCodFedEx;
    public $codAmountFedEx;
    public $codMethodFedEx;
    public $codFreightTypeFedEx;
    public $deliveryConfFedEx;
    public $signatureOptionsFedEx;
    public $signatureReleaseFedEx;
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
