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

class CampaignDirectMail {
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $campaignGroup;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $template;
    /**
     * @var string
     */
    public $description;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subscription;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $channel;
    /**
     * @var float
     */
    public $cost;
    /**
     * @var \NetSuite\Classes\CampaignCampaignDirectMailStatus
     */
    public $status;
    /**
     * @var string
     */
    public $dateScheduled;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $promoCode;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "internalId" => "string",
        "campaignGroup" => "RecordRef",
        "template" => "RecordRef",
        "description" => "string",
        "subscription" => "RecordRef",
        "channel" => "RecordRef",
        "cost" => "float",
        "status" => "CampaignCampaignDirectMailStatus",
        "dateScheduled" => "dateTime",
        "promoCode" => "RecordRef",
        "customFieldList" => "CustomFieldList",
    );
}
