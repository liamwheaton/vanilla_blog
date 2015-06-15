<div class="main">

	<?= Form::Open('add_comment.php') ?>

		<div class="row">
			<?= Form::label('content', 'Comment') ?>
			<?= Form::textarea('content') ?>
		</div>

		<?= Form::submit() ?>

		<?= Form::hidden('post_id', $post->id) ?>

	<?= Form::close() ?>
		
</div>