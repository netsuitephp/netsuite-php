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

class GetSelectValueFieldDescription {
    public $recordType;
    public $customRecordType;
    public $customTransactionType;
    public $sublist;
    public $field;
    public $customForm;
    public $filter;
    public $filterByValueList;
    static $paramtypesmap = array(
        "recordType" => "RecordType",
        "customRecordType" => "RecordRef",
        "customTransactionType" => "RecordRef",
        "sublist" => "string",
        "field" => "string",
        "customForm" => "RecordRef",
        "filter" => "GetSelectValueFilter",
        "filterByValueList" => "GetSelectFilterByFieldValueList",
    );
}
