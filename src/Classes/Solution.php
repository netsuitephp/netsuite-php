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

class Solution extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $solutionCode;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $message;
    /**
     * @var \NetSuite\Classes\SolutionStatus
     */
    public $status;
    /**
     * @var boolean
     */
    public $displayOnline;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $assigned;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var string
     */
    public $longDescription;
    /**
     * @var \NetSuite\Classes\SolutionTopicsList
     */
    public $topicsList;
    /**
     * @var string
     */
    public $createdDate;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SolutionsList
     */
    public $solutionsList;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "solutionCode" => "string",
        "title" => "string",
        "message" => "string",
        "status" => "SolutionStatus",
        "displayOnline" => "boolean",
        "assigned" => "RecordRef",
        "isInactive" => "boolean",
        "longDescription" => "string",
        "topicsList" => "SolutionTopicsList",
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "solutionsList" => "SolutionsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
