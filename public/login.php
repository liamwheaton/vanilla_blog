<?php 

	#libraries and models

require_once '../libraries/login.lib.php';
require_once '../libraries/url.lib.php';
require_once '../libraries/form.lib.php';

require_once '../models/user.model.php';

	#logic

if($_POST){
	$user = new User();

	$user->username = $_POST['username'];
	$user->password = $_POST['password'];

	$success = $user->authenticate();

	if($success){
		Login::log_in($user->id);

		URL::redirect('index.php');
	}else{
		echo "Failed to authenticate";
	}

}

	#views

include '../views/header.php';
include '../views/login_form.php';
include '../views/footer.php';