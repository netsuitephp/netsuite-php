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

class MessageSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $author;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $authorEmail;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $bcc;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $cc;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $hasAttachment;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $internalOnly;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isEmailed;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isIncoming;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $message;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $messageDate;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $messageType;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $recipient;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $recipientEmail;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $subject;
    static $paramtypesmap = array(
        "author" => "SearchColumnSelectField[]",
        "authorEmail" => "SearchColumnStringField[]",
        "bcc" => "SearchColumnStringField[]",
        "cc" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "hasAttachment" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "internalOnly" => "SearchColumnBooleanField[]",
        "isEmailed" => "SearchColumnBooleanField[]",
        "isIncoming" => "SearchColumnBooleanField[]",
        "message" => "SearchColumnStringField[]",
        "messageDate" => "SearchColumnDateField[]",
        "messageType" => "SearchColumnEnumSelectField[]",
        "recipient" => "SearchColumnSelectField[]",
        "recipientEmail" => "SearchColumnStringField[]",
        "subject" => "SearchColumnStringField[]",
    );
}
