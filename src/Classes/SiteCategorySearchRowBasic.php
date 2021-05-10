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

class SiteCategorySearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dateViewed;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $description;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $excludeFromSitemap;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $fullName;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $hidden;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $hits;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $longDescription;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $pageTitle;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $sitemapPriority;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $urlComponent;
    static $paramtypesmap = array(
        "dateViewed" => "SearchColumnDateField[]",
        "description" => "SearchColumnStringField[]",
        "excludeFromSitemap" => "SearchColumnBooleanField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fullName" => "SearchColumnStringField[]",
        "hidden" => "SearchColumnBooleanField[]",
        "hits" => "SearchColumnLongField[]",
        "internalId" => "SearchColumnSelectField[]",
        "longDescription" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "pageTitle" => "SearchColumnStringField[]",
        "sitemapPriority" => "SearchColumnEnumSelectField[]",
        "urlComponent" => "SearchColumnStringField[]",
    );
}
