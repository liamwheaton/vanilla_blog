<?php 

	#libraries and models

require_once '../libraries/url.lib.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/form.lib.php';

require_once '../models/post.model.php';
require_once '../models/posts.collection.php';

	#logic

Login::kickout();
URL::save();

$post = new Post();

$post_title = 'Edit Post';

$post->load($_GET['id']);

if ($post->user_id != Login::user_id()) {
	URL::redirect('index.php');
}

if ($_POST) {

	$post->title = $_POST['title'];

	$post->content = $_POST['content'];

	$post->save();

	URL::restore();
}

	#views

include '../views/header.php';
include '../views/nav.php';
include '../views/post_form.php';
include '../views/footer.php';

