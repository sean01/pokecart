<?php 

#1. Logic

$products = new Products_Collection();

$products->load();

#2. Load Views
include VIEWS.'header.php';
include VIEWS.'products_grid.php';
include VIEWS.'footer.php';