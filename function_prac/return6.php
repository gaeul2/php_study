<?php
//참/거짓으로 반환되도록 하기
function can_pay_cash($cash_on_hand, $amount)
{
    if ($cash_on_hand < $amount) {
        return false;
    } else {
        return true;
    }

}

if (can_pay_cash(10, 20)) {
    print "현금결제 ㄱㄱ";
} else {
    print "카드내자~";
}
