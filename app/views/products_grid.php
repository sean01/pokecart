<div class="container">

	<div class="products">
		<? if($products->items) : ?>
			<? foreach($products->items as $product) : ?> 
				<div class="product thumbnail flex flex-column">
					<h3><?= $product->name ?></h3>
					<img src="/<?= $product->image ?>" alt="" width="215" height="215"></a>
					<div class="caption flex flex-column flex-j-between flex-1">									
						<p><?= myTruncate($product->description, 200, " "); ?></p>
						<p><a href="product/<?=$product->id?>/view">Read More</a></p>
						<p>
							<span class="btn btn-primary fixed-b fixed" role="button">$<?= number_format($product->price, 2, '.', '') ?></span>
							

							<? if(Auth::is_logged_in()) : ?>
							<a href="cart/add/<?=$product->id ?>" class="btn btn-primary add-to-cart" role="button">
								<i class="fa fa-shopping-cart"></i> Add to Cart
							</a>

						<? endif ?>

						


							
						</p>
					</div>
				</div>
			<? endforeach; ?> 	
		<? else: ?>
			<h3 class="container center">No products to display</h3>
		<? endif ; ?>
	</div>
</div>


