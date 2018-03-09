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

class SalesOrderOrderStatus {
    static $paramtypesmap = array(
    );
    const _pendingApproval = "_pendingApproval";
    const _pendingFulfillment = "_pendingFulfillment";
    const _cancelled = "_cancelled";
    const _partiallyFulfilled = "_partiallyFulfilled";
    const _pendingBillingPartFulfilled = "_pendingBillingPartFulfilled";
    const _pendingBilling = "_pendingBilling";
    const _fullyBilled = "_fullyBilled";
    const _closed = "_closed";
    const _undefined = "_undefined";
}
