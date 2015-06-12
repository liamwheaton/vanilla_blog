<div class="main">

	<h1>Feed</h1>
	
	<?php $posts = new Posts_Collection([
				'deleted' => '0'
			]); 
	?>

	<? foreach ($posts->items as $post_items): ?>
		
		<div class="post_items">

			<a href="single_post.php?id=<?= $post_items->id ?>"><?= $post_items->title ?></a>

			<p><?= $post_items->content ?></p>

			<p>Posted by User ID: <?= $post_items->user_id ?></p>

			<p>at: <?= $post_items->date_posted ?></p>

			<?php if($post_items->user_id == Login::user_id() && Login::is_logged_in()): ?>

				<a href="edit_post.php?id=<?= $post_items->id ?>">Edit</a>
				<a href="delete_post.php?id=<?= $post_items->id ?>">Delete</a>

			<?php endif; ?>

		</div>

	<? endforeach ?>

</div>