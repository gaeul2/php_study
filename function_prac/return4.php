<?php

function payment_method($cash_on_hand, $amount)
{
    if ($amount > $cash_on_hand) {
        return "신용카드";
    } else {
        return '현금';
    }
}

$payment = payment_method(50, 60);

print "결제방법: $payment 입니다.";
