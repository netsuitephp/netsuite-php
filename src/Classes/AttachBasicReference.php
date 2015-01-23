<?php

class AttachBasicReference extends AttachReference {
	public $attachedRecord;
	static $paramtypesmap = array(
		"attachedRecord" => "BaseRef",
	);
}

