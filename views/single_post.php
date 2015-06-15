<div class="main">
	<?php URL::save(); ?>
	

	<?php $id = $_GET['id']; ?>

	<?php $post = new Post(); ?>

	<?php $post->load($id); ?>

	<h1 class = 'post_title'><?= $post->title  ?></h1>

	<div class ='post_content'><p><?= $post->content ?></p></div>

	<div class = 'post_user'><p>Posted by User ID: <?= $post->user_id ?></p></div>

	<div class = 'post_date'><p>at: <?= $post->date_posted ?></p></div>

	<?php if($post->user_id == Login::user_id() && Login::is_logged_in()): ?>

		<a class = 'post_edit' href="edit_post.php?id=<?= $post->id ?>">Edit</a>
		<a class = 'post_delete' href="delete_post.php?id=<?= $post->id ?>">Delete</a>

	<?php endif; ?>

	<div class="comments">

		<?php $comments = new Comments_collection([
					'deleted' => '0', 'post_id' => $post->id
				]); 
		?>

		<? foreach ($comments->items as $comment): ?>

			<div class="comment">

				<div class="comment_content"><p><?= $comment->content ?></p></div>

				<div class="comment_user"><p>Posted by User ID: <?= $comment->user_id ?></p></div>

				<div class="comment_date"><p>at: <?= $comment->date_posted ?></p></div>

				<?php if($comment->user_id == Login::user_id()): ?>

					<a class = 'edit' href="edit_comment.php?id=<?= $comment->id ?>">Edit</a>
					<a class = 'delete' href="delete_comment.php?id=<?= $comment->id ?>">Delete</a>

				<?php endif; ?>
				
			</div>

		<?php endforeach; ?>
		
	</div>

</div>

