<?php
function countdown($top){
    while ( $top > 0 ) {
        print "$top..";
        $top--;
    }
    print "펑\n";
}

$counter = 5; #외부 변수
countdown($counter);
print "바깥 counter의 값: $counter";
