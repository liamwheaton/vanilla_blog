<? if(Login::is_logged_in()): ?> 
	<a href="create_post.php">New Post</a>
	<a href="logout.php">Logout</a>
<? else: ?>
	<a href="login.php">Login</a>
<? endif; ?>