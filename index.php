<?php

// Observer Design Pattern in PHP 😊
// Author: Muhammad Moradipour
// github.com/WebPajooh

require 'Product.php';
require 'Customer.php';

// We need a subject and three observers
$product = new Product(300000);
$customer1 = new Customer('Muhammad');
$customer2 = new Customer('Parsa');
$customer3 = new Customer('Matin');

// Attach the observers
$product->attach($customer1);
$product->attach($customer2);
$product->attach($customer3);

// Change the state
$product->setPrice(350000);