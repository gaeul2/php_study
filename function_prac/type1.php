<?php

function countdown(int $top)
{
    while ($top > 0) {
        print "$top..";
        $top--;
    }
    print "펑\n";
}

$counter = 5;
countdown($counter);
$wrong = "메롱";
countdown($wrong);