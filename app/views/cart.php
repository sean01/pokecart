<div class="container">

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

	<a href="/cart/clear" class="btn btn-warning">Clear Cart</a>
	
</div>
