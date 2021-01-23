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

class CouponCodeSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $code;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $dateSent;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $id;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $promotion;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $recipient;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $useCount;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $used;
    static $paramtypesmap = array(
        "code" => "SearchColumnStringField[]",
        "dateSent" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "id" => "SearchColumnLongField[]",
        "internalId" => "SearchColumnSelectField[]",
        "promotion" => "SearchColumnStringField[]",
        "recipient" => "SearchColumnStringField[]",
        "useCount" => "SearchColumnLongField[]",
        "used" => "SearchColumnBooleanField[]",
    );
}
