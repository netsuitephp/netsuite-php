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

class Note extends Record {
    public $title;
    public $noteType;
    public $direction;
    public $noteDate;
    public $note;
    public $lastModifiedDate;
    public $activity;
    public $author;
    public $entity;
    public $folder;
    public $item;
    public $media;
    public $record;
    public $recordType;
    public $topic;
    public $transaction;
    public $customForm;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "title" => "string",
        "noteType" => "RecordRef",
        "direction" => "NoteDirection",
        "noteDate" => "dateTime",
        "note" => "string",
        "lastModifiedDate" => "dateTime",
        "activity" => "RecordRef",
        "author" => "RecordRef",
        "entity" => "RecordRef",
        "folder" => "RecordRef",
        "item" => "RecordRef",
        "media" => "RecordRef",
        "record" => "RecordRef",
        "recordType" => "RecordRef",
        "topic" => "RecordRef",
        "transaction" => "RecordRef",
        "customForm" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
