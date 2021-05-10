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

class PurchaseOrderOrderStatus {
    static $paramtypesmap = array(
    );
    const _closed = "_closed";
    const _fullyBilled = "_fullyBilled";
    const _partiallyReceived = "_partiallyReceived";
    const _pendingBillingPartiallyReceived = "_pendingBillingPartiallyReceived";
    const _pendingBilling = "_pendingBilling";
    const _pendingReceipt = "_pendingReceipt";
    const _pendingSupervisorApproval = "_pendingSupervisorApproval";
    const _rejectedBySupervisor = "_rejectedBySupervisor";
}
