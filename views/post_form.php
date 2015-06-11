<div class="main">
	
	<h2><?= $post_title ?></h2>

	<?= Form::Open() ?>

		<div class="row">
			<?= Form::label('title', 'Post Title') ?>
			<?= Form::text('title', $post->title) ?>
		</div>

		<div class="row">
			<?= Form::label('content', 'Post Content') ?>
			<?= Form::textarea('content', $post->content) ?>
		</div>

		<?= Form::submit() ?>

	<?= Form::close() ?>
		
</div>