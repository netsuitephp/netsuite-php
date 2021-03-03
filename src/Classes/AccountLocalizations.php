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

class AccountLocalizations {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $accountingContext;
    /**
     * @var string
     */
    public $acctNumber;
    /**
     * @var string
     */
    public $acctName;
    /**
     * @var string
     */
    public $legalName;
    /**
     * @var \NetSuite\Classes\Language
     */
    public $locale;
    static $paramtypesmap = array(
        "accountingContext" => "RecordRef",
        "acctNumber" => "string",
        "acctName" => "string",
        "legalName" => "string",
        "locale" => "Language",
    );
}
