<?php 

	#libraries and models

require_once '../libraries/form.lib.php';
require_once '../libraries/xss.lib.php';
require_once '../libraries/url.lib.php';
require_once '../libraries/login.lib.php';

require_once '../models/user.model.php';


	#logic


if ($_POST) {
	
	$user = new User();

	$user->username = $_POST['username'];

	$user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);

	$user->save();

   URL::redirect('index.php');
}

	#views

include '../views/header.php';
include '../views/nav.php';
include '../views/register_form.php';
include '../views/footer.php';