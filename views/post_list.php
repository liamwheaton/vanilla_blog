<div class="main">

	<h1>Feed</h1>
	
	<?php $posts = new Posts_Collection([
			'deleted' => '0'
		]); 
	?>

	<? foreach ($posts->items as $post_items): ?>
		
		<div class="post_items">
			<h2><?= $post_items->title ?></h2>
			<p><?= $post_items->content ?></p>
			<p>Posted by User ID: <?= $post_items->user_id ?></p>
			<p>at: <?= $post_items->date_posted ?></p>
			<a href="edit_post.php?id=<?= $post_items->id ?>">Edit</a>
			<a href="delete_post.php?id=<?= $post_items->id ?>">Delete</a>
		</div>

	<? endforeach ?>

</div>