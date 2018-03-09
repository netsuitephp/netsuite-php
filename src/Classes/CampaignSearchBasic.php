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

class CampaignSearchBasic extends SearchRecordBasic {
    public $audience;
    public $baseCost;
    public $campaignEventType;
    public $campaignId;
    public $category;
    public $channel;
    public $cost;
    public $createdDate;
    public $endDate;
    public $event;
    public $expectedRevenue;
    public $externalId;
    public $externalIdString;
    public $family;
    public $group;
    public $internalId;
    public $internalIdNumber;
    public $isInactive;
    public $isSalesCampaign;
    public $item;
    public $keyword;
    public $lastModifiedDate;
    public $manager;
    public $managerRole;
    public $number;
    public $offer;
    public $promoCode;
    public $recipient;
    public $response;
    public $responseCategory;
    public $responseCode;
    public $responseComments;
    public $responseDate;
    public $scheduleDate;
    public $searchEngine;
    public $startDate;
    public $status;
    public $subscription;
    public $template;
    public $title;
    public $vertical;
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
