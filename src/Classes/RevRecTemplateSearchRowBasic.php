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

class RevRecTemplateSearchRowBasic extends SearchRowBasic {
    public $amorMethod;
    public $amorPeriod;
    public $amorStartOffset;
    public $amorTermSrc;
    public $amorType;
    public $contraAccount;
    public $deferralAccount;
    public $externalId;
    public $internalId;
    public $isInactive;
    public $name;
    public $periodOffset;
    public $targetAccount;
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
