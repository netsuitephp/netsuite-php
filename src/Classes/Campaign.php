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

class Campaign extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $campaignId;
    /**
     * @var string
     */
    public $title;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $category;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $owner;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var string
     */
    public $url;
    /**
     * @var float
     */
    public $baseCost;
    /**
     * @var float
     */
    public $cost;
    /**
     * @var float
     */
    public $expectedRevenue;
    /**
     * @var string
     */
    public $message;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var boolean
     */
    public $local;
    /**
     * @var float
     */
    public $totalRevenue;
    /**
     * @var float
     */
    public $roi;
    /**
     * @var float
     */
    public $profit;
    /**
     * @var float
     */
    public $costPerCustomer;
    /**
     * @var float
     */
    public $convCostPerCustomer;
    /**
     * @var integer
     */
    public $conversions;
    /**
     * @var integer
     */
    public $leadsGenerated;
    /**
     * @var integer
     */
    public $uniqueVisitors;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $vertical;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $audience;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $offer;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $promotionCode;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $itemList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $family;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $searchEngine;
    /**
     * @var string
     */
    public $keyword;
    /**
     * @var \NetSuite\Classes\CampaignEmailList
     */
    public $campaignEmailList;
    /**
     * @var \NetSuite\Classes\CampaignDirectMailList
     */
    public $campaignDirectMailList;
    /**
     * @var \NetSuite\Classes\CampaignEventList
     */
    public $campaignEventList;
    /**
     * @var \NetSuite\Classes\CampaignEventResponseList
     */
    public $eventResponseList;
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
