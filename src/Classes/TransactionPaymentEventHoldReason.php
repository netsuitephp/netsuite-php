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

class TransactionPaymentEventHoldReason {
    static $paramtypesmap = array(
    );
    const _amountExceedsMaximumAllowedAmount = "_amountExceedsMaximumAllowedAmount";
    const _authorizationDecline = "_authorizationDecline";
    const _cardExpired = "_cardExpired";
    const _cardInvalid = "_cardInvalid";
    const _confirmationOfTheOperationIsPending = "_confirmationOfTheOperationIsPending";
    const _externalFraudRejection = "_externalFraudRejection";
    const _externalFraudReview = "_externalFraudReview";
    const _fatalError = "_fatalError";
    const _forwardedToPayerAuthentication = "_forwardedToPayerAuthentication";
    const _forwardRequested = "_forwardRequested";
    const _gatewayAsynchronousNotification = "_gatewayAsynchronousNotification";
    const _gatewayError = "_gatewayError";
    const _generalHold = "_generalHold";
    const _generalReject = "_generalReject";
    const _operationWasSuccessful = "_operationWasSuccessful";
    const _operationWasTerminated = "_operationWasTerminated";
    const _overridenBy = "_overridenBy";
    const _partnerDecline = "_partnerDecline";
    const _paymentDeviceWasPrimed = "_paymentDeviceWasPrimed";
    const _paymentOperationWasCanceled = "_paymentOperationWasCanceled";
    const _systemError = "_systemError";
    const _verbalAuthorizationRequested = "_verbalAuthorizationRequested";
    const _verificationRejection = "_verificationRejection";
    const _verificationRequired = "_verificationRequired";
}
