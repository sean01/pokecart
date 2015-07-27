<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Catch 'Em All!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/assets/css/animate.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	
</head>
<body>
<header>
	<div class="navbar navbar-default">

		<div class="container">

			
			<h1 class="navbar-brand center">Gotta Catch 'Em All!</a></h1>

				<ul class="nav nav-pills navbar-right center">

					<li><a href="/"><i class="fa fa-home"></i>  Home</a></li>

					<? if(Auth::is_logged_in()): ?>

						<li><a href="/cart"><i class="fa fa-shopping-cart"></i>  My Cart <span class="badge cart-count"><?= Cart::get_total() ?></span></a></li>

						<? if(Auth::is_admin()): ?>

							<li><a href="/admin"><i class="fa fa-user"></i> Admin</a></li>

						<? else: ?>

							<li><a href="/"><i class="fa fa-user"></i> <?= ucfirst(Auth::user()->username) ?></a></li>

						<? endif ?>

						<li><a href="/logout"><i class="fa fa-reply"></i>  Log out</a></li>

						
					<? else: ?>

						<li><a href="/register"><i class="fa fa-user-plus"></i>  Register</a></li>
						<li><a href="/login"><i class="fa fa-share"></i>  Login</a></li>

					<? endif ?>

					<li>
						<form class="navbar-form navbar-left" action="/search.php">
							
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search" name="keywords" value="<?= Route::param('keywords') ?>">
							</div>

							<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
						</form>


					</li>
					<li>
						<div class="notification ">
							<div class="notification-cart hide animated">
								<h2 class="productName"></h2>
								<div class="flex flex-a-center flex-j-between">
									<a href="" class="productLink"><img src="" alt="" height="94" width="94" class="productImg"></a>
										<div class="flex-column flex-1 ">
											<h6 class="productPrice flex-1"></h6>
											<h6 class="productSub flex-1"></h6>
										</div>
								</div>							
								
								<div class="whiteHover flex flex-j-between">
									<h6><a href="/cart" class="flex-1">View Cart</a></h6>
									<h6><a href="" class="flex-1 productRemove remove-from-cart">Remove Cart<span class="productQty"></span></a></h6>
								</div>
								
							</div>
						</div>
					</li>

				</ul>

		</div>


	</div>

	<div class="navbar" id="navCat">
		<div class="container">
				<div class="">
					<ul class="nav nav-pills navbar-center flex flex-j-between">
						<li><a href="">Pokemon</a>
							<!-- <ul>
								<li><a href=""></a>Grass</li>
								<li><a href=""></a>Fire</li>
								<li><a href=""></a>Water</li>
								<li><a href=""></a>Electric</li>
								<li><a href=""></a>Rock</li>  
								<li><a href=""></a>Psychic</li>
							</ul> -->
							
						</li>			
						<li><a href="">Accessories</a>
							<!-- <ul>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
							</ul> -->
						</li>				
						<li><a href="">Home & Decor</a></li>				
						<li><a href="">TMs/HMs</a></li>				
						<li><a href="">Battle Items</a></li>				
					</ul>
				</div>
				
		</div>
	</div>
</header>

<div class="main">
	