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

class ItemFulfillment extends Record {
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $postingPeriod;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $createdFrom;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $requestedBy;
    /**
     * @var integer
     */
    public $createdFromShipGroup;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $partner;
    /**
     * @var \NetSuite\Classes\Address
     */
    public $shippingAddress;
    /**
     * @var string
     */
    public $pickedDate;
    /**
     * @var string
     */
    public $packedDate;
    /**
     * @var string
     */
    public $shippedDate;
    /**
     * @var boolean
     */
    public $shipIsResidential;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipAddressList;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentShipStatus
     */
    public $shipStatus;
    /**
     * @var boolean
     */
    public $saturdayDeliveryUps;
    /**
     * @var boolean
     */
    public $sendShipNotifyEmailUps;
    /**
     * @var boolean
     */
    public $sendBackupEmailUps;
    /**
     * @var string
     */
    public $shipNotifyEmailAddressUps;
    /**
     * @var string
     */
    public $shipNotifyEmailAddress2Ups;
    /**
     * @var string
     */
    public $backupEmailAddressUps;
    /**
     * @var string
     */
    public $shipNotifyEmailMessageUps;
    /**
     * @var string
     */
    public $thirdPartyAcctUps;
    /**
     * @var string
     */
    public $thirdPartyZipcodeUps;
    /**
     * @var \NetSuite\Classes\Country::*
     */
    public $thirdPartyCountryUps;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentThirdPartyTypeUps
     */
    public $thirdPartyTypeUps;
    /**
     * @var boolean
     */
    public $partiesToTransactionUps;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentExportTypeUps
     */
    public $exportTypeUps;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentMethodOfTransportUps
     */
    public $methodOfTransportUps;
    /**
     * @var string
     */
    public $carrierIdUps;
    /**
     * @var string
     */
    public $entryNumberUps;
    /**
     * @var string
     */
    public $inbondCodeUps;
    /**
     * @var boolean
     */
    public $isRoutedExportTransactionUps;
    /**
     * @var string
     */
    public $licenseNumberUps;
    /**
     * @var string
     */
    public $licenseDateUps;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentLicenseExceptionUps
     */
    public $licenseExceptionUps;
    /**
     * @var string
     */
    public $eccNumberUps;
    /**
     * @var string
     */
    public $recipientTaxIdUps;
    /**
     * @var string
     */
    public $blanketStartDateUps;
    /**
     * @var string
     */
    public $blanketEndDateUps;
    /**
     * @var float
     */
    public $shipmentWeightUps;
    /**
     * @var boolean
     */
    public $saturdayDeliveryFedEx;
    /**
     * @var boolean
     */
    public $saturdayPickupFedex;
    /**
     * @var boolean
     */
    public $sendShipNotifyEmailFedEx;
    /**
     * @var boolean
     */
    public $sendBackupEmailFedEx;
    /**
     * @var boolean
     */
    public $signatureHomeDeliveryFedEx;
    /**
     * @var string
     */
    public $shipNotifyEmailAddressFedEx;
    /**
     * @var string
     */
    public $backupEmailAddressFedEx;
    /**
     * @var string
     */
    public $shipDateFedEx;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentHomeDeliveryTypeFedEx
     */
    public $homeDeliveryTypeFedEx;
    /**
     * @var string
     */
    public $homeDeliveryDateFedEx;
    /**
     * @var string
     */
    public $bookingConfirmationNumFedEx;
    /**
     * @var string
     */
    public $intlExemptionNumFedEx;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentB13AFilingOptionFedEx
     */
    public $b13aFilingOptionFedEx;
    /**
     * @var string
     */
    public $b13aStatementDataFedEx;
    /**
     * @var string
     */
    public $thirdPartyAcctFedEx;
    /**
     * @var \NetSuite\Classes\Country::*
     */
    public $thirdPartyCountryFedEx;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentThirdPartyTypeFedEx
     */
    public $thirdPartyTypeFedEx;
    /**
     * @var float
     */
    public $shipmentWeightFedEx;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentTermsOfSaleFedEx
     */
    public $termsOfSaleFedEx;
    /**
     * @var float
     */
    public $termsFreightChargeFedEx;
    /**
     * @var float
     */
    public $termsInsuranceChargeFedEx;
    /**
     * @var boolean
     */
    public $insideDeliveryFedEx;
    /**
     * @var boolean
     */
    public $insidePickupFedEx;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentAncillaryEndorsementFedEx
     */
    public $ancillaryEndorsementFedEx;
    /**
     * @var boolean
     */
    public $holdAtLocationFedEx;
    /**
     * @var string
     */
    public $halPhoneFedEx;
    /**
     * @var string
     */
    public $halAddr1FedEx;
    /**
     * @var string
     */
    public $halAddr2FedEx;
    /**
     * @var string
     */
    public $halAddr3FedEx;
    /**
     * @var string
     */
    public $halCityFedEx;
    /**
     * @var string
     */
    public $halZipFedEx;
    /**
     * @var string
     */
    public $halStateFedEx;
    /**
     * @var string
     */
    public $halCountryFedEx;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentHazmatTypeFedEx
     */
    public $hazmatTypeFedEx;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentAccessibilityTypeFedEx
     */
    public $accessibilityTypeFedEx;
    /**
     * @var boolean
     */
    public $isCargoAircraftOnlyFedEx;
    /**
     * @var string
     */
    public $tranDate;
    /**
     * @var string
     */
    public $tranId;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipMethod;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $inventoryLocation;
    /**
     * @var boolean
     */
    public $generateIntegratedShipperLabel;
    /**
     * @var float
     */
    public $shippingCost;
    /**
     * @var float
     */
    public $handlingCost;
    /**
     * @var string
     */
    public $memo;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $transferLocation;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentPackageList
     */
    public $packageList;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentPackageUpsList
     */
    public $packageUpsList;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentPackageUspsList
     */
    public $packageUspsList;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentPackageFedExList
     */
    public $packageFedExList;
    /**
     * @var \NetSuite\Classes\ItemFulfillmentItemList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\AccountingBookDetailList
     */
    public $accountingBookDetailList;
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
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "postingPeriod" => "RecordRef",
        "entity" => "RecordRef",
        "createdFrom" => "RecordRef",
        "requestedBy" => "RecordRef",
        "createdFromShipGroup" => "integer",
        "partner" => "RecordRef",
        "shippingAddress" => "Address",
        "pickedDate" => "dateTime",
        "packedDate" => "dateTime",
        "shippedDate" => "dateTime",
        "shipIsResidential" => "boolean",
        "shipAddressList" => "RecordRef",
        "shipStatus" => "ItemFulfillmentShipStatus",
        "saturdayDeliveryUps" => "boolean",
        "sendShipNotifyEmailUps" => "boolean",
        "sendBackupEmailUps" => "boolean",
        "shipNotifyEmailAddressUps" => "string",
        "shipNotifyEmailAddress2Ups" => "string",
        "backupEmailAddressUps" => "string",
        "shipNotifyEmailMessageUps" => "string",
        "thirdPartyAcctUps" => "string",
        "thirdPartyZipcodeUps" => "string",
        "thirdPartyCountryUps" => "Country",
        "thirdPartyTypeUps" => "ItemFulfillmentThirdPartyTypeUps",
        "partiesToTransactionUps" => "boolean",
        "exportTypeUps" => "ItemFulfillmentExportTypeUps",
        "methodOfTransportUps" => "ItemFulfillmentMethodOfTransportUps",
        "carrierIdUps" => "string",
        "entryNumberUps" => "string",
        "inbondCodeUps" => "string",
        "isRoutedExportTransactionUps" => "boolean",
        "licenseNumberUps" => "string",
        "licenseDateUps" => "dateTime",
        "licenseExceptionUps" => "ItemFulfillmentLicenseExceptionUps",
        "eccNumberUps" => "string",
        "recipientTaxIdUps" => "string",
        "blanketStartDateUps" => "dateTime",
        "blanketEndDateUps" => "dateTime",
        "shipmentWeightUps" => "float",
        "saturdayDeliveryFedEx" => "boolean",
        "saturdayPickupFedex" => "boolean",
        "sendShipNotifyEmailFedEx" => "boolean",
        "sendBackupEmailFedEx" => "boolean",
        "signatureHomeDeliveryFedEx" => "boolean",
        "shipNotifyEmailAddressFedEx" => "string",
        "backupEmailAddressFedEx" => "string",
        "shipDateFedEx" => "dateTime",
        "homeDeliveryTypeFedEx" => "ItemFulfillmentHomeDeliveryTypeFedEx",
        "homeDeliveryDateFedEx" => "dateTime",
        "bookingConfirmationNumFedEx" => "string",
        "intlExemptionNumFedEx" => "string",
        "b13aFilingOptionFedEx" => "ItemFulfillmentB13AFilingOptionFedEx",
        "b13aStatementDataFedEx" => "string",
        "thirdPartyAcctFedEx" => "string",
        "thirdPartyCountryFedEx" => "Country",
        "thirdPartyTypeFedEx" => "ItemFulfillmentThirdPartyTypeFedEx",
        "shipmentWeightFedEx" => "float",
        "termsOfSaleFedEx" => "ItemFulfillmentTermsOfSaleFedEx",
        "termsFreightChargeFedEx" => "float",
        "termsInsuranceChargeFedEx" => "float",
        "insideDeliveryFedEx" => "boolean",
        "insidePickupFedEx" => "boolean",
        "ancillaryEndorsementFedEx" => "ItemFulfillmentAncillaryEndorsementFedEx",
        "holdAtLocationFedEx" => "boolean",
        "halPhoneFedEx" => "string",
        "halAddr1FedEx" => "string",
        "halAddr2FedEx" => "string",
        "halAddr3FedEx" => "string",
        "halCityFedEx" => "string",
        "halZipFedEx" => "string",
        "halStateFedEx" => "string",
        "halCountryFedEx" => "string",
        "hazmatTypeFedEx" => "ItemFulfillmentHazmatTypeFedEx",
        "accessibilityTypeFedEx" => "ItemFulfillmentAccessibilityTypeFedEx",
        "isCargoAircraftOnlyFedEx" => "boolean",
        "tranDate" => "dateTime",
        "tranId" => "string",
        "shipMethod" => "RecordRef",
        "inventoryLocation" => "RecordRef",
        "generateIntegratedShipperLabel" => "boolean",
        "shippingCost" => "float",
        "handlingCost" => "float",
        "memo" => "string",
        "transferLocation" => "RecordRef",
        "packageList" => "ItemFulfillmentPackageList",
        "packageUpsList" => "ItemFulfillmentPackageUpsList",
        "packageUspsList" => "ItemFulfillmentPackageUspsList",
        "packageFedExList" => "ItemFulfillmentPackageFedExList",
        "itemList" => "ItemFulfillmentItemList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
