<div class="main">

	<h1>Posts</h1>
	
	<?php $posts = new Posts_Collection([
			'deleted' => '0'
		]); 
	?>

	<? foreach ($posts->items as $post_items): ?>
		
		<div class="post_items">
			<h2><?= $post_items->title ?></h2>
			<p><?= $post_items->content ?></p>
		</div>

	<? endforeach ?>

</div>