<?php 

	#libraries and models

require_once '../libraries/form.lib.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/url.lib.php';

require_once '../models/post.model.php';
require_once '../models/user.model.php';
require_once '../models/posts.collection.php';

	#logic

Login::kickout();

$post_title = "Create New Post"; 

// $user = new User();
// $user->load($_GET['id']);
// $user_id = return($_GET['id']);



if ($_POST) {
	
	$post = new Post();

	$post->title = $_POST['title'];

	$post->content = $_POST['content'];

	$post->date_posted = date('Y-m-d H:i:s');

	$post->user_id = $user_id;

	$post->save();

   URL::redirect('index.php');
}

	#views

include '../views/header.php';
include '../views/nav.php';
include '../views/post_form.php';
include '../views/footer.php';