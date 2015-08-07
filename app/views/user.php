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

				<?php if ($error): ?>
					<p class="alert alert-danger"><?= $error ?></p>
				<?php endif ?>

				<?php if ($success): ?>
					<p class="alert alert-info"><?= $success ?></p>
				<?php endif ?>

				<?= Form::open('', 'post', ['id' => 'change-password-form']) ?>
					<div class="form-group">
						<?=Form::label('old_password', 'Existing Password')?>
						<?=Form::password('old_password', '', ['class' => 'form-control'])?>
					</div>

					<div class="form-group">
						<?=Form::label('password', 'New Password')?>
						<?=Form::password('password', '', ['class' => 'form-control'])?>
					</div>

					<div class="form-group">
						<?=Form::label('repeat_password', 'Repeat Password')?>
						<?=Form::password('repeat_password', '', ['class' => 'form-control'])?>
					</div>

					<div class="form-group">
						<?= Form::submit('Save', ['class' => 'btn btn-primary'])?>
					</div>

				<?= Form::close() ?>


			</div>
		</div>

	</div> 	


</div>