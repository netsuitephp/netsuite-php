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
