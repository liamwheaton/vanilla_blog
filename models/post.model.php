<?php 

# post.model.php

#load the model library if it hasnt already been done
require_once '../libraries/model.lib.php';

class Post extends model{

	# Tell the post model what table it belongs to
	protected $table = 'posts';

	# We need to do this for the model to work
	public function __construct(){
		parent::__construct($this->table);
	}

}