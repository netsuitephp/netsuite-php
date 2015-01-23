<?php

class TransactionPaymentEventHoldReason {
	static $paramtypesmap = array(
	);
	const _authorizationDecline = "_authorizationDecline";
	const _cardExpired = "_cardExpired";
	const _cardInvalid = "_cardInvalid";
	const _externalFraudRejection = "_externalFraudRejection";
	const _externalFraudReview = "_externalFraudReview";
	const _forwardedToPayerAuthentication = "_forwardedToPayerAuthentication";
	const _forwardRequested = "_forwardRequested";
	const _gatewayError = "_gatewayError";
	const _overridenBy = "_overridenBy";
	const _partnerDecline = "_partnerDecline";
	const _systemError = "_systemError";
	const _verbalAuthorizationRequested = "_verbalAuthorizationRequested";
	const _verificationRejection = "_verificationRejection";
	const _verificationRequired = "_verificationRequired";
}

