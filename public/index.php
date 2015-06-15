<?php 

#index.php

	#libraries and models

require_once '../libraries/login.lib.php';
require_once '../libraries/url.lib.php';
require_once '../libraries/database.lib.php';

require_once '../models/post.model.php';
require_once '../models/posts.collection.php';

	#logic

URL::save();


	#views

include "../views/header.php";
include "../views/nav.php";
include "../views/post_list.php";
include "../views/footer.php";