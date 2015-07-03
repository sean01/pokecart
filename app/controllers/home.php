<?php 

#1. LOGIC



$products = new Products_Collection();

$products->where('deleted', '0');
$products->order_by('id', 'asc');

$products->get();







#2. LOAD VIEWS

include VIEWS.'header.php';
include VIEWS.'products_grid.php';
include VIEWS.'footer.php';