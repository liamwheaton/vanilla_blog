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

if ($_POST) {
	
	$comment = new Comment();

	$comment->content = $_POST['content'];

	$comment->date_posted = date('Y-m-d H:i:s');

	$comment->post_id = $_POST['post_id'];

	$comment->user_id = Login::user_id();

	$comment->save();

	URL::restore();
}

	