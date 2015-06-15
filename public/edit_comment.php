<?php 

	#libraries and models

require_once '../libraries/url.lib.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/form.lib.php';

require_once '../models/comment.model.php';
require_once '../models/post.model.php';
require_once '../models/comments.collection.php';

	#logic

Login::kickout();
URL::save();

$comment = new Comment();

$post_title = 'Edit Comment';

$comment->load($_GET['id']);

if ($comment->user_id != Login::user_id()) {
	URL::redirect('index.php');
}

if ($_POST) {


	$comment->content = $_POST['content'];

	$comment->save();

	URL::restore();
}

	#views

include '../views/header.php';
include '../views/nav.php';
include '../views/post_form.php';
include '../views/footer.php';

