<?php
$specials = array(array('체스트넛 번', '호두 번', '땅콩 번'),
                  array('체스트넛 샐러드', '호두 샐러드', '땅콩 샐러드','메롱'));

#num_sub는 이차원배열의 개수를 세기위함.
for ($i=0, $num_specials = count($specials); $i < $num_specials; $i++){
    for ($m = 0, $num_sub = count($specials[$i]); $m < $num_sub; $m++){
        print "Element [$i][$m]은 {$specials[$i][$m]}입니다.\n";
    }
}
?>
