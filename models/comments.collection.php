<?php 
# comments.collection.php

require_once '../libraries/collection.lib.php';

class Comments_collection extends Collection {

	protected $table = 'comments';

	public function __construct($where = false){
		parent::__construct($this->table, $where);
	}
}