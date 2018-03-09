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

class Campaign extends Record {
    public $customForm;
    public $campaignId;
    public $title;
    public $category;
    public $owner;
    public $startDate;
    public $endDate;
    public $url;
    public $baseCost;
    public $cost;
    public $expectedRevenue;
    public $message;
    public $isInactive;
    public $local;
    public $totalRevenue;
    public $roi;
    public $profit;
    public $costPerCustomer;
    public $convCostPerCustomer;
    public $conversions;
    public $leadsGenerated;
    public $uniqueVisitors;
    public $vertical;
    public $audience;
    public $offer;
    public $promotionCode;
    public $itemList;
    public $family;
    public $searchEngine;
    public $keyword;
    public $campaignEmailList;
    public $campaignDirectMailList;
    public $campaignEventList;
    public $eventResponseList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "campaignId" => "string",
        "title" => "string",
        "category" => "RecordRef",
        "owner" => "RecordRef",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "url" => "string",
        "baseCost" => "float",
        "cost" => "float",
        "expectedRevenue" => "float",
        "message" => "string",
        "isInactive" => "boolean",
        "local" => "boolean",
        "totalRevenue" => "float",
        "roi" => "float",
        "profit" => "float",
        "costPerCustomer" => "float",
        "convCostPerCustomer" => "float",
        "conversions" => "integer",
        "leadsGenerated" => "integer",
        "uniqueVisitors" => "integer",
        "vertical" => "RecordRef",
        "audience" => "RecordRef",
        "offer" => "RecordRef",
        "promotionCode" => "RecordRef",
        "itemList" => "RecordRefList",
        "family" => "RecordRef",
        "searchEngine" => "RecordRef",
        "keyword" => "string",
        "campaignEmailList" => "CampaignEmailList",
        "campaignDirectMailList" => "CampaignDirectMailList",
        "campaignEventList" => "CampaignEventList",
        "eventResponseList" => "CampaignEventResponseList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
