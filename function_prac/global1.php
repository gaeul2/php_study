<?php
$dinner = "갑오징어 카레";

function macrobiotic_dinner()
{
    $dinner = "모듬 채소";
    print "저녁메뉴는 $dinner 입니다.";
    print " 하지만 저는 ";
    print $GLOBALS['dinner'];
    print "를 먹겠어요\n";
}

macrobiotic_dinner();
print "일반저녁메뉴: $dinner \n";

function change_global()
{
    $GLOBALS['dinner'] = '치킨 토마토 파스타';
    print "\n전역변수 바꾸기!!!\n \n";
}
change_global();
macrobiotic_dinner();
print "일반저녁메뉴: $dinner";