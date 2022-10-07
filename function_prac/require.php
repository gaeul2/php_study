<?php
require 'restaurant_check.php';

$total_bill = restaurant_check(25, 8.875, 20);

$cash = 30;

print "결제방법은 " . payment_method($cash, $total_bill);