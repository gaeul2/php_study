<?php
function restaurant_check($meal, $tip, $tax)
{
    $tip_amount = $meal + ($tip / 100);
    $tax_amount = $meal + ($tax / 100);
    $total = $meal + $tip_amount + $tax_amount;

    return $total;
}

if (restaurant_check(10, 13, 10) < 50) {
    print "가격이 생각보다 괜찮은데? 다음에 또오자";
} else {
    print "어우 비싸다...ㅠㅠ";
}
