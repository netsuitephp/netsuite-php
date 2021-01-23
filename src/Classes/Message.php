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

class Message extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $author;
    /**
     * @var string
     */
    public $authorEmail;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $recipient;
    /**
     * @var string
     */
    public $recipientEmail;
    /**
     * @var string
     */
    public $cc;
    /**
     * @var string
     */
    public $bcc;
    /**
     * @var string
     */
    public $messageDate;
    /**
     * @var string
     */
    public $recordName;
    /**
     * @var string
     */
    public $recordTypeName;
    /**
     * @var string
     */
    public $subject;
    /**
     * @var string
     */
    public $message;
    /**
     * @var boolean
     */
    public $emailed;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $activity;
    /**
     * @var boolean
     */
    public $compressAttachments;
    /**
     * @var boolean
     */
    public $incoming;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $transaction;
    /**
     * @var \NetSuite\Classes\MessageMediaItemList
     */
    public $mediaItemList;
    /**
     * @var string
     */
    public $dateTime;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "author" => "RecordRef",
        "authorEmail" => "string",
        "recipient" => "RecordRef",
        "recipientEmail" => "string",
        "cc" => "string",
        "bcc" => "string",
        "messageDate" => "dateTime",
        "recordName" => "string",
        "recordTypeName" => "string",
        "subject" => "string",
        "message" => "string",
        "emailed" => "boolean",
        "activity" => "RecordRef",
        "compressAttachments" => "boolean",
        "incoming" => "boolean",
        "lastModifiedDate" => "dateTime",
        "transaction" => "RecordRef",
        "mediaItemList" => "MessageMediaItemList",
        "dateTime" => "string",
        "internalId" => "string",
        "externalId" => "string",
    );
}
