<div class="container">
	<!-- Original comment here -->
	<h3>Edit Message</h3>

	<div class="thumbnail comment push-top">
		<h3><?= ucfirst($comment->author->username)  ?></h3>
		<p>at <?= date('g:ia y/m/d', strtotime($comment->date_time)) ?></p>
		<p><?= $comment->content ?></p>	
	</div>
	<!-- Edit box -->
	<?= Form::open() ?>
		<div class="form-group">
			<?=Form::label('message', 'Edit Post')?>
			<?=Form::textarea('message', Sticky::get('message'), ['class' => 'form-control review-post'])?>
		</div>

		<div class="form-group">
			<?= Form::submit('Save', ['class' => 'btn btn-primary'])?>
		</div>
	<?= Form::close() ?>
</div>