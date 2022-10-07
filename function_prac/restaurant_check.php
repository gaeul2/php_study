<?php
function restaurant_check($meal, $tax, $tip)
{
    $tip_amount = $meal + ($tip / 100);
    $tax_amount = $meal + ($tax / 100);
    $total = $meal + $tip_amount + $tax_amount;

    return $total;
}

function payment_method($cash_on_hand, $amount)
{
    if ($amount > $cash_on_hand) {
        return '신용카드';
    } else {
        return '현금';
    }
}