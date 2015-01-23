<?php

class DetachBasicReference extends DetachReference {
	public $detachedRecord;
	static $paramtypesmap = array(
		"detachedRecord" => "BaseRef",
	);
}

