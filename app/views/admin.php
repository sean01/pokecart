<div class="container">
	<h2 class="center">Admin</h2>

	<hr>

	<div class="flex flex-j-between flex-a-center">
		<h3>Edit Products</h3>
		
		<a href="/product/new" class="btn btn-primary">Add Product</a>
	</div>

	<table class="table table-striped">
		<tr>
			<th>Image</th>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Edit/Delete</th>			
		</tr>
	
	

		<? foreach($products->items as $product): ?>
		<tr>
			<td width="100">
				<img src="/<?= $product->image ?>" width="94" height="94">
			</td>
			<td class="v-center" >
				<?= $product->name ?>
			</td>
			<td>
				<?= myTruncate($product->description, 200, " "); ?>
			</td>
			<td>
				$<?= number_format($product->price, 2, '.', '') ?>
			</td>
			<td width="150"> 
				<a href="/product/<?=$product->id ?>/edit" class="btn btn-info">Edit</a>
				<a href="/product/<?=$product->id ?>/delete" class="btn btn-danger">Delete</a>
			</td> 

		</tr>
		<? endforeach ?>
	</table>
	


</div>