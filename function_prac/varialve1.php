<?php

$dinner = "갑오징어 카레";

function vegetarian_dinner()
{
    print "함수1 저녁메뉴는 $dinner 또는";
    $dinner = '2 완두싹 볶음';
    print "3 $dinner";
    print "4 입니다.\n";
}

function kosher_dinner()
{
    print "함수 1 저녁메뉴는 $dinner 또는";
    $dinner = '2 궁보계정';
    print "3 $dinner";
    print "4 입니다.\n";
}

print "채식주의식";
vegetarian_dinner();
print "유태인식";
kosher_dinner();
print "일반저녁메뉴는 $dinner 입니다";