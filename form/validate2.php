<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // post로 요청이 왔을때
    if ($form_errors = validate_form()) {
        show_form($form_errors);
    } else {
        process_form();
    }
} else {
    show_form(0);
}

function validate_form()
{
    // 오류 메세지를 담을 빈 배열 생성
    $errors = array();

    // 이름이 너무 짧으면 오류 메세지 추가
    if (strlen($_POST['username']) < 6) {
        $errors[] = '이름은 3글자 이상 입력해주세요';
    }

    // (빈 배열일 수도 있는) 오류 메세지 배열 반환
    return $errors;
}

function process_form()
{
    print $_POST['username'] . "님 안녕하세요";
}

function show_form($errors)
{
    // 오류 메시지를 전달받으면 출력한다.
    if ($errors) {
        print "오류 목록 : <ul><li>";
        print implode('</li><li>', $errors);
        print '</li></ul>';
    }
    // 오류메세지가 없다면 form태그 출력
    print <<<_HTML_
<form method ='POST' action="$_SERVER[PHP_SELF]">
이름 : <input type="text" name="username">
<br/>
<input type="submit" value="인사">
</form>
_HTML_;
}