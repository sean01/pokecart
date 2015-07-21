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
								<a href="" class="productLink">
									<img src="" alt="" height="94" width="94" class="productImg">
								</a>
								<h4 class="productPrice"></h4>
								<h4 class="productSub"></h4>
							</div>
						</div>
					</li>

				</ul>

		</div>
	</div>