<div class="container">
<!-- 	<div class="products">
		<? if(Cart::get_total()) : ?>
			<? foreach(Cart::products() as $product) : ?> 
				<div class="product thumbnail flex flex-column">
					<h3><?= $product->name ?></h3>
					<img src="<?= $product->image ?>" alt="" width="215" height="215"></a>
					<div class="caption flex flex-column flex-j-between flex-1">									
						<p><?= myTruncate($product->description, 200, " "); ?></p>
						<p><a href="<?= url('product/'.$product->id.'/view') ?>">Read More</a></p>
						<p><a href="#" class="btn btn-primary fixed-b fixed" role="button">$ <?= number_format($product->price, 2, '.', '') ?></a></p>
					</div>
				</div>
			<? endforeach; ?> 	
		<? else: ?>
			<h3 class="container center">No products to display</h3>
		<? endif ; ?>
	</div> -->


	<table class="table table-striped">
		
		<tr>
			<th>Image</th>
			<th>Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Total</th>
			<th>Delete</th>


		<? $total = 0; ?>

		<? if(Cart::get_total()) : ?>

		<? foreach(Cart::products() as $product) : ?> 
		
		<? $total += $product->quantity * $product->price; ?>

		<tr>
			<td>
				<img src="<?= $product->image ?>" width="94" height="94">
			</td>
			<td><?= $product->name ?></td>
			<td>$<?= $product->price ?></td>
			<td>
				<?= Form::open('/cart/update/'.$product->id) ?>

				<?= Form::number('quantity', $product->quantity) ?>

				<?= Form::submit('Set') ?>

				<?= Form::close() ?>
			</td>
			<td>$<?= $product->quantity * $product->price ?></td>
			
			<td>
				<a href="/cart/remove/<?= $product->id ?>" class="btn btn-danger">Remove</a>
			</td>
		</tr>

	<?php endforeach ?>
<? else: ?>
<h3 class="container center">No products to display</h3>
<? endif ; ?>

<tr>
	<td colspan="4"></td>
	<td>$<?= $total ?></td>
	<td></td>
</tr>

</table>



	<a href="<?= url('cart/clear') ?>" class="btn btn-warning">Clear Cart</a>
	
</div>
