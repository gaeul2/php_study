<?php
function page_header3($color = 'cc3399'){ //page_header($변수명=인수)
    print "<html><head><title>저의 홈페이지에 오신 것을 환영합니다.</title></head>";
    // print '<body bgcolor="#'.$color.'">'; //인수로 전달된 값을 함수 내부 코드에서 사용할 수 있다.
    print "<body bgcolor='#$color'>";
}

// page_header3();
page_header3('6600cc');
?>