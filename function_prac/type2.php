<?php

function restaurant_check($meal, $tax, $tip): float
{
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_amount = $meal + $tax_amount + $tip_amount;

    return $total_amount;
}

print restaurant_check(100, 20, 50);
print restaurant_check("안녕", "오류", "어때?");