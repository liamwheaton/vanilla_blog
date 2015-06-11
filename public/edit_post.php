<?php 

	#libraries and models

require_once '../libraries/login.lib.php';
require_once '../libraries/form.lib.php';

require_once '../models/post.model.php';
require_once '../models/posts.collection.php';

	#logic

// Login::kickout();

$post = new Post();

$post_title = 'Edit Post';

$post->load($_GET['id']);

if ($_POST) {

	$post->title = $_POST['title'];

	$post->content = $_POST['content'];

	$post->save();
}



	#views

include '../views/header.php';
include '../views/post_form.php';
include '../views/footer.php';