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
 * generated:  2019-06-12 10:27:00 AM PDT
 */

namespace NetSuite\Classes;

class InboundShipment extends Record {
    public $customForm;
    public $shipmentNumber;
    public $externalDocumentNumber;
    public $shipmentStatus;
    public $expectedShippingDate;
    public $actualShippingDate;
    public $expectedDeliveryDate;
    public $actualDeliveryDate;
    public $shipmentMemo;
    public $vesselNumber;
    public $billOfLading;
    public $landedCostList;
    public $itemsList;
    public $shipmentBaseCurrency;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "shipmentNumber" => "string",
        "externalDocumentNumber" => "string",
        "shipmentStatus" => "InboundShipmentShipmentStatus",
        "expectedShippingDate" => "dateTime",
        "actualShippingDate" => "dateTime",
        "expectedDeliveryDate" => "dateTime",
        "actualDeliveryDate" => "dateTime",
        "shipmentMemo" => "string",
        "vesselNumber" => "string",
        "billOfLading" => "string",
        "landedCostList" => "InboundShipmentLandedCostList",
        "itemsList" => "InboundShipmentItemsList",
        "shipmentBaseCurrency" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
