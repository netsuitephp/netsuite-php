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

class PromotionCodeSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $code;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $description;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $discount;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
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
    public $isPublic;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $startDate;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "code" => "SearchColumnStringField[]",
        "description" => "SearchColumnStringField[]",
        "discount" => "SearchColumnStringField[]",
        "endDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isPublic" => "SearchColumnBooleanField[]",
        "location" => "SearchColumnSelectField[]",
        "name" => "SearchColumnStringField[]",
        "startDate" => "SearchColumnDateField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
