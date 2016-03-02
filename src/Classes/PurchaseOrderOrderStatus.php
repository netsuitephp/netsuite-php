<?php

namespace Fungku\NetSuite\Classes;

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

