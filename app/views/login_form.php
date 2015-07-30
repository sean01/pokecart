<div class="container">
	
	<h2 class="col-md-4 col-md-offset-4">Contact Us</h2>

	<hr>

	<?= Form::open('', 'post', ['class' => 'col-md-4 col-md-offset-4']) ?>
		
		<div class="form-group">
			<?=Form::label('username', 'Username:')?>
			<?=Form::text('username', ['class' => 'form-control'])?>
		</div>

		<div class="form-group">
			<?=Form::label('password', 'Password:')?>
			<?=Form::password('password', ['class' => 'form-control'])?>
		</div>

		<div class="form-group">
			<?=Form::label('message', 'Message:')?>
			<?=Form::textarea('message', ['class' => 'form-control'])?>
		</div>

		<div class="form-group">
			<?= Form::label('Send') ?>
		</div>
	<?= Form::close() ?>

</div>