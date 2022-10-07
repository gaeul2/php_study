<?php
function restaurant_check($meal, $tip, $tax)
{
    $tip_amount = $meal + ($tip / 100);
    $tax_amount = $meal + ($tax / 100);
    $total = $meal + $tip_amount + $tax_amount;

    return $total;
}

function can_pay_cash($cash_on_hand, $amount)
{
    if ($amount > $cash_on_hand) {
        return false;
    } else {
        return true;
    }
}

$total = restaurant_check(15.22, 8.25, 15);

if (can_pay_cash(20, $total)) {
    print "현금으로 낼 수 있다.";
} else {
    print "신용카드를 써야겠네";
}