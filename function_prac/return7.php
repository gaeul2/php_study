<?php
function complete_bill($meal, $tax, $tip, $cash_on_hand)
{
    $tax_amount = $meal + ($tax / 100);
    $tip_amount = $meal + ($tip / 100);
    $total = $meal + $tax_amount + $tip_amount;

    if ($total > $cash_on_hand) {
        return 0;
    } else {
        return $total;
    }
}

if ($total = complete_bill(50, 10, 10, 1000)) {
    print "$total 정도면 현금으로 낼 수 있어";
} else {
    print "카드로 내고 내가 돈줄게";
}
