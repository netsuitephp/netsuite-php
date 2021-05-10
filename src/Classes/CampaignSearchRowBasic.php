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

class CampaignSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $audience;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $baseCost;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $campaignId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $category;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $channel;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $cost;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $createdDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $event;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $executedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $expectedRevenue;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $family;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isSalesCampaign;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $item;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $keyword;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $managerRole;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $message;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $offer;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $promoCode;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $recipient;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $response;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $responseCategory;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $responseCode;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $responseDate;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $responseNotes;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $revenue;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $roi;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $scheduledDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $searchEngine;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $status;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subscription;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $title;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $url;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $vertical;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "audience" => "SearchColumnSelectField[]",
        "baseCost" => "SearchColumnDoubleField[]",
        "campaignId" => "SearchColumnStringField[]",
        "category" => "SearchColumnSelectField[]",
        "channel" => "SearchColumnSelectField[]",
        "cost" => "SearchColumnDoubleField[]",
        "createdDate" => "SearchColumnDateField[]",
        "endDate" => "SearchColumnDateField[]",
        "event" => "SearchColumnStringField[]",
        "executedDate" => "SearchColumnDateField[]",
        "expectedRevenue" => "SearchColumnDoubleField[]",
        "externalId" => "SearchColumnSelectField[]",
        "family" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isSalesCampaign" => "SearchColumnBooleanField[]",
        "item" => "SearchColumnSelectField[]",
        "keyword" => "SearchColumnStringField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "managerRole" => "SearchColumnSelectField[]",
        "message" => "SearchColumnStringField[]",
        "offer" => "SearchColumnSelectField[]",
        "owner" => "SearchColumnSelectField[]",
        "promoCode" => "SearchColumnStringField[]",
        "recipient" => "SearchColumnSelectField[]",
        "response" => "SearchColumnEnumSelectField[]",
        "responseCategory" => "SearchColumnEnumSelectField[]",
        "responseCode" => "SearchColumnLongField[]",
        "responseDate" => "SearchColumnDateField[]",
        "responseNotes" => "SearchColumnStringField[]",
        "revenue" => "SearchColumnDoubleField[]",
        "roi" => "SearchColumnDoubleField[]",
        "scheduledDate" => "SearchColumnDateField[]",
        "searchEngine" => "SearchColumnSelectField[]",
        "startDate" => "SearchColumnDateField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "subscription" => "SearchColumnSelectField[]",
        "title" => "SearchColumnStringField[]",
        "url" => "SearchColumnStringField[]",
        "vertical" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
