<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (validate_form()) {
        process_form();
    }
    show_form();
} else {
    show_form();
} //호출먼저하고 함수정의해도 얘네는 오류가 안남

function validate_form()
{
    if (strlen($_POST['username']) < 3) {
        return false;
    } else {
        return true;
    }
}

function process_form()
{
    print $_POST['username'] . "님 안녕!";
    print strlen($_POST['username']);
}

function show_form()
{
    print <<<_HTML_
    <form method="post", action="$_SERVER[PHP_SELF]">
    이름 : <input type="text" name="username">
    <br/>
    <input type="submit" value="출석">
    </form>
    _HTML_;
}