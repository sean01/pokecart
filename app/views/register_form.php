<div class="container">
	
	<h2 class="col-md-4 col-md-offset-4 push-top">Register</h2>

	<hr>

	<?= Form::open('', 'post', ['class' => 'col-md-4 col-md-offset-4', 'id' => 'register-form'])?>
		
		<div class="form-group">
			<?=Form::label('username', 'Username:')?>
			<?=Form::text('username', Sticky::get('username'), ['class' => 'form-control'])?>
		</div>

		<div class="form-group">
			<?=Form::label('email', 'Email:')?>
			<?=Form::text('email', Sticky::get('email'), ['class' => 'form-control'])?>
		</div>

		<div class="form-group">
			<?=Form::label('password', 'Password:')?>
			<?=Form::password('password', Sticky::get(''), ['class' => 'form-control'])?>
		</div>

		<div class="form-group">
			<?= Form::submit('Register', ['class' => 'btn btn-primary'])?>
		</div>

		<a href="/login">Existing user?</a>


	<?= Form::close() ?>

</div>