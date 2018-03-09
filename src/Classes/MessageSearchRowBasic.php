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

class MessageSearchRowBasic extends SearchRowBasic {
    public $author;
    public $authorEmail;
    public $bcc;
    public $cc;
    public $externalId;
    public $hasAttachment;
    public $internalId;
    public $internalOnly;
    public $isEmailed;
    public $isIncoming;
    public $message;
    public $messageDate;
    public $messageType;
    public $recipient;
    public $recipientEmail;
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
