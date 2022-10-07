<?php
#선택적 인수가 하나일 때
function page_header5($color, $title, $header='어서오세요'){
    print "<html><head><title>".$title."</title></head>";
    print '<body bgcolor="#'.$color.'">';
    print "<h1>$header</h1>";
}
//올바른 호출방법
page_header5('66cc66', '메롱');#$header의 기본값 사용
page_header5('66cc66', '메롱','잘만들었네!');//기본값 이용안함

#선택적 인수가 두개일때. 필수인수, 선택적인수,선택적인수
function page_header6($color, $title = '홈페이지', $header = '어서오세요'){
    print "<html><head><title>$title</title></head>";
    print "<body bgcolor='#".$color."'>";
    print "<h1>$header</h1>";
}

//page_header6 호출법
page_header6('66cc66'); #title과 header기본값 사용
page_header6('66cc66', '메롱'); #header의 기본값 사용
page_header6('66cc66', '메롱','잘만들었네!'); #기본값 사용하지 않음.

#모든 인수가 선택적일때
function page_header7($color = '66cc66', $title = '홈페이지', $header = '어서오세요'){
    print "<html><head><title>$title</title></head></html>";
    print '<body bgcolor="#'.$color.'">';
    print "<h1>$header</h1>";
}

//page_header7 호출법

page_header7(); #모든 기본값 사용
page_header7('66cc66'); #title과 header기본값 사용
page_header7('66cc66', '메롱');#header의 기본값 사용
page_header7('66cc66', '메롱','잘만들었네!');#기본값 사용하지 않음.

?>
