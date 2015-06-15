<?php 
	
	#libraries

require_once '../libraries/login.lib.php';
require_once '../libraries/url.lib.php';

require_once '../models/post.model.php';
require_once '../models/comment.model.php';
require_once '../models/comments.collection.php';
require_once '../models/user.model.php';


	#logic

Login::kickout();

$comment = new Comment();

$comment->load($_GET['id']);

if ($comment->user_id != Login::user_id()) {
	URL::redirect('index.php');
}

$comment->delete();

	#views/redirect

URL::restore();