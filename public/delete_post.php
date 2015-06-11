<?php 

	#libraries and models

require_once '../libraries/url.lib.php';
require_once '../libraries/login.lib.php';

require_once '../models/post.model.php';

	#logic
Login::kickout();

$post = new Post();

$post->load($_GET['id']);

$post->delete();

	#views/redirect

URL::redirect('index.php');