<?php 


#1. LOGIC

Auth::kickout_non_admin('/pokecart/');




$products = new Products_Collection();

$products->where('deleted', '0');
$products->order_by('id', 'asc');
$products->get();










#2. LOAD VIEWS
include VIEWS.'header.php';
include VIEWS.'admin.php';
include VIEWS.'footer.php';
