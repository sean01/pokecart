<div class="container">
	<div class="thumbnail push-top">
		<h3><?= ucfirst(Auth::user()->username) ?></h3>
		
		<div class="user-options">		
			<div class="post-history">
				<h4>Posts</h4>
				<?php foreach ($user->comments as $comment): ?>
					<div class="thumbnail comment">
						<p><?= $comment->date_time ?></p>
						<p><?= $comment->content ?></p>	
					</div>			
				<?php endforeach ?>
			</div>
			<div class="change-password">
				<h4>Change Password</h4>

				<?= Form::open(['class' => 'col-md-4 col-md-offset-4', 'id' => 'change-password-form']) ?>
					<div class="form-group">
						<?=Form::label('password', 'Existing Password')?>
						<?=Form::password('password', Sticky::get(''), ['class' => 'form-control', 'id' => 'password'])?>
					</div>

					<div class="form-group">
						<?=Form::label('new_pass', 'New Password')?>
						<?=Form::password('new_pass', Sticky::get(''), ['class' => 'form-control',  'id' => 'new-pass'])?>
					</div>

					<div class="form-group">
						<?=Form::label('repeat_password', 'Repeat Password')?>
						<?=Form::password('repeat_password', Sticky::get(''), ['class' => 'form-control', 'id' => 'repeat_password'])?>
					</div>

					<div class="form-group">
						<?= Form::submit('Save', ['class' => 'btn btn-primary'])?>
					</div>

				<?= Form::close() ?>


			</div>
		</div>

	</div> 	


</div>