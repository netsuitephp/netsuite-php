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
 * generated:  2020-12-11 06:57:10 PM PST
 */

namespace NetSuite\Classes;

class InboundShipment extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $shipmentNumber;
    /**
     * @var string
     */
    public $externalDocumentNumber;
    /**
     * @var \NetSuite\Classes\InboundShipmentShipmentStatus
     */
    public $shipmentStatus;
    /**
     * @var string
     */
    public $expectedShippingDate;
    /**
     * @var string
     */
    public $actualShippingDate;
    /**
     * @var string
     */
    public $expectedDeliveryDate;
    /**
     * @var string
     */
    public $actualDeliveryDate;
    /**
     * @var string
     */
    public $shipmentMemo;
    /**
     * @var string
     */
    public $vesselNumber;
    /**
     * @var string
     */
    public $billOfLading;
    /**
     * @var \NetSuite\Classes\InboundShipmentLandedCostList
     */
    public $landedCostList;
    /**
     * @var \NetSuite\Classes\InboundShipmentItemsList
     */
    public $itemsList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipmentBaseCurrency;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
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
