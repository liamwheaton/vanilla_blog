<?php 

	#libraries and models

require_once '../libraries/url.lib.php';
require_once '../libraries/login.lib.php';

require_once '../models/post.model.php';

	#logic

Login::kickout();
URL::save();

$post = new Post();

$post->load($_GET['id']);

if ($post->user_id != Login::user_id()) {
	URL::redirect('index.php');
}

$post->delete();

	#views/redirect

URL::redirect('index.php');