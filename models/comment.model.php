<?php 

# comment.model.php

#load the model library if it hasnt already been done
require_once '../libraries/model.lib.php';

class Comment extends model{

	# Tell the post model what table it belongs to
	protected $table = 'comments';

	# We need to do this for the model to work
	public function __construct(){
		parent::__construct($this->table);
	}

}