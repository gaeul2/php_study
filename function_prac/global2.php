<?php
$dinner = '치킨 토마토 파스타';

function vegetarian_dinner()
{
    global $dinner;
    print "저녁메뉴는 $dinner 였으나 지금은";
    $dinner = '치킨 샐러드';
    print $dinner;
    print "입니다.\n";
}

print "일반 저녁메뉴는 $dinner 입니다.\n";
Vegetarian_dinner();
print "일반 저녁메뉴는 $dinner 입니다.";