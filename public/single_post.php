<?php 

	#libraries and models

require_once '../libraries/login.lib.php';
require_once '../libraries/url.lib.php';
require_once '../libraries/form.lib.php';

require_once '../models/post.model.php';
require_once '../models/comment.model.php';
require_once '../models/comments.collection.php';


	#logic

URL::save();


	#views/redirect

include "../views/header.php";
include "../views/nav.php";
include "../views/single_post.php";
include "../views/comment_form.php";
include "../views/footer.php";