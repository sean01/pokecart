<div class="container">
	<div>
		<h2>Contact Us!</h2>

		<hr>
		
		<p>Send us a message!</p>
		<div class="flex flex-1 push-right">
			<?= Form::open('', 'post', ['class' => 'col-md-4']) ?>
			
				<div class="form-group">
					<?=Form::label('fname', 'Your name:')?>
					<?=Form::text('fname', ['class' => 'form-control'])?>
				</div>

				<div class="form-group">
					<?=Form::label('email', 'Email')?>
					<?=Form::email('email', ['class' => 'form-control'])?>
				</div>

				<div class="form-group">
					<?=Form::label('message', 'Message')?>
					<?=Form::textarea('message', ['class' => 'form-control '])?>
				</div>

				<div class="form-group">
					<?= Form::submit('Send', ['class' => 'btn btn-primary'])?>
				</div>

				<p>We'll reply within 48hrs.</p>
			<?= Form::close() ?>
		
		
			<div class="flex flex-1" id="googleMap"></div>
		</div>			
	</div>
</div>
	