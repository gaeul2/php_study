<?php
function page_header4($color, $title){
    print "<html><head><title>".$title."에 오신것을 환영합니다.</title></head>";
    print '<body bgcolor="#'.$color.'">';//$color는 문자임 bgcolor="#66cc66"이 되어야함.
}
page_header4('66cc66','안녕')
?>