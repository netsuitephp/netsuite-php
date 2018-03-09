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

class ItemFulfillment extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $postingPeriod;
    public $entity;
    public $createdFrom;
    public $requestedBy;
    public $createdFromShipGroup;
    public $partner;
    public $shippingAddress;
    public $pickedDate;
    public $packedDate;
    public $shippedDate;
    public $shipIsResidential;
    public $shipAddressList;
    public $shipStatus;
    public $saturdayDeliveryUps;
    public $sendShipNotifyEmailUps;
    public $sendBackupEmailUps;
    public $shipNotifyEmailAddressUps;
    public $shipNotifyEmailAddress2Ups;
    public $backupEmailAddressUps;
    public $shipNotifyEmailMessageUps;
    public $thirdPartyAcctUps;
    public $thirdPartyZipcodeUps;
    public $thirdPartyCountryUps;
    public $thirdPartyTypeUps;
    public $partiesToTransactionUps;
    public $exportTypeUps;
    public $methodOfTransportUps;
    public $carrierIdUps;
    public $entryNumberUps;
    public $inbondCodeUps;
    public $isRoutedExportTransactionUps;
    public $licenseNumberUps;
    public $licenseDateUps;
    public $licenseExceptionUps;
    public $eccNumberUps;
    public $recipientTaxIdUps;
    public $blanketStartDateUps;
    public $blanketEndDateUps;
    public $shipmentWeightUps;
    public $saturdayDeliveryFedEx;
    public $saturdayPickupFedex;
    public $sendShipNotifyEmailFedEx;
    public $sendBackupEmailFedEx;
    public $signatureHomeDeliveryFedEx;
    public $shipNotifyEmailAddressFedEx;
    public $backupEmailAddressFedEx;
    public $shipDateFedEx;
    public $homeDeliveryTypeFedEx;
    public $homeDeliveryDateFedEx;
    public $bookingConfirmationNumFedEx;
    public $intlExemptionNumFedEx;
    public $b13aFilingOptionFedEx;
    public $b13aStatementDataFedEx;
    public $thirdPartyAcctFedEx;
    public $thirdPartyCountryFedEx;
    public $thirdPartyTypeFedEx;
    public $shipmentWeightFedEx;
    public $termsOfSaleFedEx;
    public $termsFreightChargeFedEx;
    public $termsInsuranceChargeFedEx;
    public $insideDeliveryFedEx;
    public $insidePickupFedEx;
    public $ancillaryEndorsementFedEx;
    public $holdAtLocationFedEx;
    public $halPhoneFedEx;
    public $halAddr1FedEx;
    public $halAddr2FedEx;
    public $halAddr3FedEx;
    public $halCityFedEx;
    public $halZipFedEx;
    public $halStateFedEx;
    public $halCountryFedEx;
    public $hazmatTypeFedEx;
    public $accessibilityTypeFedEx;
    public $isCargoAircraftOnlyFedEx;
    public $tranDate;
    public $tranId;
    public $shipMethod;
    public $generateIntegratedShipperLabel;
    public $shippingCost;
    public $handlingCost;
    public $memo;
    public $transferLocation;
    public $packageList;
    public $packageUpsList;
    public $packageUspsList;
    public $packageFedExList;
    public $itemList;
    public $accountingBookDetailList;
    public $customFieldList;
    public $internalId;
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
