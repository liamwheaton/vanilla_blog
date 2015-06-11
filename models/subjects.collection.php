<?php 
# subjects.collection.php

require_once '../libraries/collection.lib.php';

class Subjects_Collection extends Collection {

	protected $table = 'subjects';

	public function __construct($where = false){
		parent::__construct($this->table, $where);
	}
}