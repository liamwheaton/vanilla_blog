<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vanilla Blog</title>
</head>
<body>
	
	<div class="container">		

		<header>
			
			<h1>Vanilla Blog!</h1>

			<? if(Login::is_logged_in()): ?> 
				<a href="create_post.php">New Post</a>
				<a href="logout.php">Logout</a>
			<? else: ?>
				<a href="login.php">Login</a>
			<? endif; ?>
				
		</header>

		


		