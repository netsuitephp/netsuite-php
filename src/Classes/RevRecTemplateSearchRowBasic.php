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

class RevRecTemplateSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $amorMethod;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $amorPeriod;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $amorStartOffset;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $amorTermSrc;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $amorType;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $contraAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $deferralAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $periodOffset;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $targetAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $useForeignAmounts;
    static $paramtypesmap = array(
        "amorMethod" => "SearchColumnStringField[]",
        "amorPeriod" => "SearchColumnStringField[]",
        "amorStartOffset" => "SearchColumnStringField[]",
        "amorTermSrc" => "SearchColumnStringField[]",
        "amorType" => "SearchColumnStringField[]",
        "contraAccount" => "SearchColumnStringField[]",
        "deferralAccount" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "periodOffset" => "SearchColumnStringField[]",
        "targetAccount" => "SearchColumnStringField[]",
        "useForeignAmounts" => "SearchColumnBooleanField[]",
    );
}
