<?php 

	#libraries and models

require_once '../libraries/form.lib.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/url.lib.php';

require_once '../models/post.model.php';
require_once '../models/posts.collection.php';

	#logic

Login::kickout();

$post_title = "Create New Post";

if ($_POST) {
	
	$post = new Post();

	$post->title = $_POST['title'];

	$post->content = $_POST['content'];

	$post->date_posted = date('Y-m-d H:i:s');

	$post->save();

   URL::redirect('index.php');
}

	#views

include '../views/header.php';
include '../views/post_form.php';
include '../views/footer.php';