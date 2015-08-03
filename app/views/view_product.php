<div class="container">
	<div class="products">		
		<div class="thumbnail flex-column flex push-top">
			<h3><?= $product->name ?></h3>
			<img src="/<?= $product->image ?>" alt="" width="415" height="415"></a>
			
		</div>	
		<div class="wrapper flex">
			<div class="flex flex-column flex-a-center flex-j-center">
				<p class="large-price">$<?= number_format($product->price, 2, '.', '') ?></p>
				
			<? if(Auth::is_logged_in()): ?>	
				<a href="/cart/add/<?=$product->id ?>" class="btn btn-primary add-to-cart flex-a-center flex-column flex-j-center larger-button" role="button">
				<i class="fa fa-shopping-cart"></i> Add to Cart
			</a>

			<? else: ?>
				
				<a href="/login" class="btn btn-primary larger-button">Login to buy</a>
			<? endif ?>

			</div>
			
		</div>
		<div class="thumbnail">	
			<h3>Description</h3>
			<p><?= $product->description ?></p>
		</div>	

		<div class="thumbnail">
			<h3>Reviews</h3>

			<div class="products">

			<?= Form::open() ?>
				
			<?= Form::close() ?>

		<? if(count($product->comments)) : ?>
			<? foreach($product->comments as $comment) : ?> 
				<div class="thumbnail">
					<h3><?= ucfirst($comment->author->username)  ?></h3>
					<p>at <?= date('g:ia y/m/d', strtotime($comment->date_time)) ?></p>
					<p><?= $comment->comment ?></p>
				</div>
			</div>			
			<? endforeach; ?> 	
		<? else: ?>
			<h3 class="container center">Currently no reviews posted. Why not post one?</h3>
			<? if(!Auth::is_logged_in()): ?>
				<a href="/login" class="container center">Login to comment</a>
			<? endif; ?>
		<? endif; ?>
		
		</div>
		
	</div>
</div>





