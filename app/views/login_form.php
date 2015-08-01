<div class="container">
	
	<h2 class="col-md-4 col-md-offset-4">Login</h2>

	<hr>

	<?= Form::open('', 'post', ['class' => 'col-md-4 col-md-offset-4']) ?>
		
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
	<?= Form::close() ?>

</div>