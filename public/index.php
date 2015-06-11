<?php 

#index.php

	#libraries and models

require_once '../libraries/login.lib.php';
require_once '../libraries/xss.lib.php';

require_once '../models/post.model.php';
require_once '../models/posts.collection.php';

	#logic

// if ($_GET['post']) {
// 	$id = $_GET['post'];
// }else{
// 	$id = 1;
// }

// $post = new Post();

// $post->load($id);

	#views

include "../views/header.php";
include "../views/post_list.php";
include "../views/footer.php";