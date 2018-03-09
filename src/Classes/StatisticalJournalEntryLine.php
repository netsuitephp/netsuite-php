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

class StatisticalJournalEntryLine {
    public $account;
    public $line;
    public $location;
    public $scheduleNum;
    public $debit;
    public $memo;
    public $entity;
    public $department;
    public $class;
    public $lineUnit;
    public $previewDebit;
    public $customFieldList;
    static $paramtypesmap = array(
        "account" => "RecordRef",
        "line" => "integer",
        "location" => "RecordRef",
        "scheduleNum" => "RecordRef",
        "debit" => "float",
        "memo" => "string",
        "entity" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "lineUnit" => "RecordRef",
        "previewDebit" => "string",
        "customFieldList" => "CustomFieldList",
    );
}
