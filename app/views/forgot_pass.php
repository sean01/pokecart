<div class="container">
	<h1>Forgotten Password</h1>
	<p>Enter your email address below and we'll send you an email with a link inside. Follow the instructions in the email to reset your account password.</p>

	<?= Form::open('', 'post', ['class' => 'col-md-4 push-top']) ?>
		<div class="form-group">
			<?=Form::label('email', 'Email:')?>
			<?=Form::text('email', Sticky::get('email'), ['class' => 'form-control'])?>
		</div>

		<div class="form-group">
			<?= Form::submit('Reset Password', ['class' => 'btn btn-primary'])?>
		</div>

	<?= Form::close() ?>
</div>