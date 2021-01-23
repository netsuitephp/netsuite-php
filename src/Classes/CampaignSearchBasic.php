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

class CampaignSearchBasic extends SearchRecordBasic {
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $audience;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $baseCost;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $campaignEventType;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $campaignId;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $category;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $channel;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $cost;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $event;
    /**
     * @var \NetSuite\Classes\SearchDoubleField
     */
    public $expectedRevenue;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $externalIdString;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $family;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $group;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $internalIdNumber;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchBooleanField
     */
    public $isSalesCampaign;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $keyword;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $manager;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $managerRole;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $number;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $offer;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $promoCode;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $recipient;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $response;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $responseCategory;
    /**
     * @var \NetSuite\Classes\SearchLongField
     */
    public $responseCode;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $responseComments;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $responseDate;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $scheduleDate;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $searchEngine;
    /**
     * @var \NetSuite\Classes\SearchDateField
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchEnumMultiSelectField
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $subscription;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $template;
    /**
     * @var \NetSuite\Classes\SearchStringField
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchMultiSelectField
     */
    public $vertical;
    /**
     * @var \NetSuite\Classes\SearchCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "audience" => "SearchMultiSelectField",
        "baseCost" => "SearchDoubleField",
        "campaignEventType" => "SearchEnumMultiSelectField",
        "campaignId" => "SearchStringField",
        "category" => "SearchMultiSelectField",
        "channel" => "SearchMultiSelectField",
        "cost" => "SearchDoubleField",
        "createdDate" => "SearchDateField",
        "endDate" => "SearchDateField",
        "event" => "SearchStringField",
        "expectedRevenue" => "SearchDoubleField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "family" => "SearchMultiSelectField",
        "group" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "isSalesCampaign" => "SearchBooleanField",
        "item" => "SearchMultiSelectField",
        "keyword" => "SearchStringField",
        "lastModifiedDate" => "SearchDateField",
        "manager" => "SearchMultiSelectField",
        "managerRole" => "SearchMultiSelectField",
        "number" => "SearchLongField",
        "offer" => "SearchMultiSelectField",
        "promoCode" => "SearchMultiSelectField",
        "recipient" => "SearchMultiSelectField",
        "response" => "SearchEnumMultiSelectField",
        "responseCategory" => "SearchEnumMultiSelectField",
        "responseCode" => "SearchLongField",
        "responseComments" => "SearchStringField",
        "responseDate" => "SearchDateField",
        "scheduleDate" => "SearchDateField",
        "searchEngine" => "SearchMultiSelectField",
        "startDate" => "SearchDateField",
        "status" => "SearchEnumMultiSelectField",
        "subscription" => "SearchMultiSelectField",
        "template" => "SearchMultiSelectField",
        "title" => "SearchStringField",
        "vertical" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
