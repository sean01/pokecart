<div class="container">
	
	<h2 class="col-md-4 col-md-offset-4"><?= $title ?></h2>

	<hr>

	<?= Form::open_upload('', ['class' => 'col-md-4 col-md-offset-4  prod-warn']) ?>

		<div class="form-group">
			<?=Form::label('name', 'Name')?>
			<?=Form::text('name', Sticky::get('name'), ['class' => 'form-control'])?>
		</div>

		<div class="form-group">
			<?=Form::label('price', 'Price')?>
			<?=Form::number('price', Sticky::get('price'), ['class' => 'form-control', 'step' => '0.01'])?>
		</div>

		<div class="form-group">
			<div class="flex flex-a-center">
				<? if(Sticky::get('image')): ?>
					<img src="<?= url(Sticky::get('image')) ?>" width="96" height="96">
				<? endif; ?>
						
				
				<div>
					<?=Form::label('file', 'Image')?>
					<?=Form::file() ?>
				</div>
			</div>
		</div>

		<div class="form-group">
			<?=Form::label('description', 'Description')?>
			<?=Form::textarea('description', Sticky::get('description'), ['class' => 'form-control'])?>
		</div>

		<div class="form-group">
			<?= Form::submit('Save', ['class' => 'btn btn-primary'])?>
		</div>



	<?= Form::close() ?>

</div>





