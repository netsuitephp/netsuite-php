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

class SupportCaseStatus extends Record {
    /**
     * @var string
     */
    public $name;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $insertBefore;
    /**
     * @var \NetSuite\Classes\SupportCaseStatusStage
     */
    public $stage;
    /**
     * @var boolean
     */
    public $caseOnHold;
    /**
     * @var boolean
     */
    public $autoCloseCase;
    /**
     * @var string
     */
    public $description;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "name" => "string",
        "insertBefore" => "RecordRef",
        "stage" => "SupportCaseStatusStage",
        "caseOnHold" => "boolean",
        "autoCloseCase" => "boolean",
        "description" => "string",
        "isInactive" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );
}
