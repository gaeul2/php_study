<?php
function page_header2($color){ //page_header($변수명=인수)
    print "<html><head><title>저의 홈페이지에 오신 것을 환영합니다.</title></head>";
    print '<body bgcolor="#'.$color.'">'; //인수로 전달된 값을 함수 내부 코드에서 사용할 수 있다.
}

// page_header2('cc00cc');
page_header2();

?>