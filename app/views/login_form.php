<div class="container">
	
	<h2 class="col-md-4 col-md-offset-4 push-top">Login</h2>

	<hr>

	<?= Form::open('', 'post', ['class' => 'col-md-4 col-md-offset-4', 'id' => '#login-form' ]) ?>
		
		<div class="form-group">
			<?=Form::label('username', 'Username:')?>
			<?=Form::text('username', Sticky::get('username'), ['class' => 'form-control'])?>
		</div>

		<div class="form-group">
			<?=Form::label('password', 'Password:')?>
			<?=Form::password('password', Sticky::get(''), ['class' => 'form-control'])?>
		</div>

		<div class="form-group">
			<?= Form::submit('Login', ['class' => 'btn btn-primary']) ?>
		</div>

		<a href="/forgot_pass" class="flex-1 push-right">Forgot Password</a>
		<a href="/register" class="flex-1">New user?</a>
	<?= Form::close() ?>





</div>