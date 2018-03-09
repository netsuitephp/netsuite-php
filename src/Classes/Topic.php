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

class Topic extends Record {
    public $title;
    public $parentTopic;
    public $description;
    public $isInactive;
    public $longDescription;
    public $solutionList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "title" => "string",
        "parentTopic" => "RecordRef",
        "description" => "string",
        "isInactive" => "boolean",
        "longDescription" => "string",
        "solutionList" => "TopicSolutionList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
