<div class="main">

	<h1>Feed</h1>
	
	<?php $posts = new Posts_Collection([
				'deleted' => '0'
			]); 
	?>


	<? foreach ($posts->items as $post_items): ?>
		
		<div class="post_items">

			<a class = 'post_title' href="single_post.php?id=<?= $post_items->id ?>"><?= $post_items->title ?></a>

			<div class ='post_content'><p><?= $post_items->content ?></p></div>

			<div class = 'post_user'><p>Posted by User ID: <?= $post_items->user_id ?></p></div>

			<div class = 'post_date'><p>at: <?= $post_items->date_posted ?></p></div>

			<?php if($post_items->user_id == Login::user_id() && Login::is_logged_in()): ?>

				<a class = 'edit' href="edit_post.php?id=<?= $post_items->id ?>">Edit</a>
				<a class = 'delete' href="delete_post.php?id=<?= $post_items->id ?>">Delete</a>

			<?php endif; ?>

		</div>

	<? endforeach ?>

</div>