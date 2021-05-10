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

class Translation {
    /**
     * @var \NetSuite\Classes\Language
     */
    public $locale;
    /**
     * @var string
     */
    public $language;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $salesDescription;
    /**
     * @var string
     */
    public $storeDisplayName;
    /**
     * @var string
     */
    public $storeDescription;
    /**
     * @var string
     */
    public $storeDetailedDescription;
    /**
     * @var string
     */
    public $featuredDescription;
    /**
     * @var string
     */
    public $specialsDescription;
    /**
     * @var string
     */
    public $pageTitle;
    /**
     * @var string
     */
    public $noPriceMessage;
    /**
     * @var string
     */
    public $outOfStockMessage;
    static $paramtypesmap = array(
        "locale" => "Language",
        "language" => "string",
        "displayName" => "string",
        "description" => "string",
        "salesDescription" => "string",
        "storeDisplayName" => "string",
        "storeDescription" => "string",
        "storeDetailedDescription" => "string",
        "featuredDescription" => "string",
        "specialsDescription" => "string",
        "pageTitle" => "string",
        "noPriceMessage" => "string",
        "outOfStockMessage" => "string",
    );
}
