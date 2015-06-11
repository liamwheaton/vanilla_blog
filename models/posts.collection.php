<?php 
# posts.collection.php

require_once '../libraries/collection.lib.php';

class Posts_Collection extends Collection {

	protected $table = 'posts';

	public function __construct($where = false){
		parent::__construct($this->table, $where);
	}
}