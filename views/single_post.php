<div class="main">
	<?php URL::save(); ?>
	

	<?php $id = $_GET['id']; ?>

	<?php $post = new Post(); ?>

	<?php $post->load($id); ?>

	<h1><?= $post->title  ?></h1>

	<p><?= $post->content ?></p>

	<p>Posted by User ID: <?= $post->user_id ?></p>

	<p>at: <?= $post->date_posted ?></p>

	<?php if($post->user_id == Login::user_id() && Login::is_logged_in()): ?>

		<a href="edit_post.php?id=<?= $post->id ?>">Edit</a>
		<a href="delete_post.php?id=<?= $post->id ?>">Delete</a>

	<?php endif; ?>

</div>

