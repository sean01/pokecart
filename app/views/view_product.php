<!-- <div class="container">
	<div class="flex flex-1">
		<div class="contentWrapper">
			<h1><?= $product->name ?></h1>
		</div >
		<div class="contentWrapper ">
			<img src="/<?=$product->image?>">
		</div>
	</div>
	
	<div>
		
	</div>
</div> -->

<div class="container">
	<div class="products">		
		<div class="thumbnail flex-column flex">
			<h3><?= $product->name ?></h3>
			<img src="/<?= $product->image ?>" alt="" width="215" height="215"></a>
			<p><span class="btn btn-primary fixed-b fixed" role="button">$<?= number_format($product->price, 2, '.', '') ?></span></p>
		</div>	
		<div class="thumbnail flex-column flex">	
			<h3>Description</h3>
			<p><?= $product->description ?></p>
		</div>		
	</div>
</div>





