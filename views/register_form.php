<div class="main">
	
	<h2>Create New User</h2>

	<?= Form::Open() ?>

		<div class="row">
			<?= Form::label('username', 'Username') ?>
			<?= Form::text('username', $users->username) ?>
		</div>

		<div class="row">
			<?= Form::label('password', 'Password') ?>
			<?= Form::text('password', $users->password) ?>
		</div>

		<?= Form::submit() ?>

	<?= Form::close() ?>

	<a href="index.php">Cancel</a>
		
</div>