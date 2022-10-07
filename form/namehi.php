<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    print $_POST['my_name'] . "님 안녕하세요\n";
    if ($_SERVER['QUERY_STRING']) {
        print $_SERVER['QUERY_STRING'];
    } else {
        print '$_SERVER[\'QUERY_STRING\'] 없어서 안나오나바.' . "\n";
    }
    print $_SERVER['PATH_INFO'];
    print '$_SERVER[\'SERVER_NAME\']:' . $_SERVER['SERVER_NAME'] . "\n";
    print '$_SERVER[\'DOCUMENT_ROOT\']:' . $_SERVER['DOCUMENT_ROOT'] . "\n";
    print '$_SERVER[\'REMOTE_ADDR\']:' . $_SERVER['REMOTE_ADDR'] . "\n";
    print '$_SERVER[\'HTTP_REFERER\']:' . $_SERVER['HTTP_REFERE'] . "\n";
    print '$_SERVER[\'HTTP_USER_AGENT\']:' . $_SERVER['HTTP_USER_AGENT'] . "\n";

} else {
    print <<<_HTML_
    <form method="post" action="$_SERVER[PHP_SELF]">
    이름 : <input type="text" name="my_name">
    <br>
    <input type="submit" value="인사">
    </form>
    _HTML_;
}