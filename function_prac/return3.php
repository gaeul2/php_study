<?php
function restaurant_check($meal, $tax, $tip)
{
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total = $meal + $tax_amount + $tip_amount;
    $total_notip = $meal + $tax_amount;
    return array($total_notip, $total);
}

// 음식가격은 $15.22, 부가세는 8.25% 팁은 15%일때 총금액 구하기
$total = restaurant_check(15.22, 8.25, 15);

if ($total[0] < 20) {
    print '팁을 제외한 총금액이 $20보다 적음.';
}
if ($total[1] < 20) {
    print '팁을 포함한 총 금액이 $20보다 적음';
}
