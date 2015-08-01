<div class="container">
	<div>
		<h2 class="flex flex-1">Contact Us!</h2>

		<hr>
		
		<p>Send us a message!</p>
		
			<?= Form::open('', 'post', ['class' => 'col-md-4']) ?>
			
				<div class="form-group">
					<?=Form::label('fname', 'Your name:')?>
					<?=Form::text('fname', Sticky::get(''), ['class' => 'form-control'])?>
				</div>

				<div class="form-group">
					<?=Form::label('email', 'Your email:')?>
					<?=Form::email('email', Sticky::get('email'), ['class' => 'form-control'])?>
				</div>

				<div class="form-group">
					<?=Form::label('message', 'Your message:')?>
					<?=Form::textarea('message', Sticky::get(''), ['class' => 'form-control textArea'])?>
				</div>

				<div class="form-group">
					<?= Form::submit('Send', ['class' => 'btn btn-primary'])?>
				</div>

				<p>We'll reply within 48hrs.</p>
			<?= Form::close() ?>
		
		
			<div class="flex flex-1" id="googleMap"></div>
					
	</div>
</div>
	