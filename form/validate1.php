<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //validate_form()이 오류메세지 배열을 반환하면 show_form()에 전달한다.
    if ($fom_errors = validate_form()) {
        show_form($form_errors);
    } else {
        process_form();
    }
} else {
    show_form();
}

function show_form($errors)
{
    //오류 메시지를 전달받으면 출력한다.
    if ($errors) {
        print '다음 항목을 수정해주세요: <ul><li>';
        print implode('</li><li>', $errors);
        print '</li></ul>';
    }
    print <<<_HTML_
<form method ="POST" action="$_SERVER[PHP_SELF]">
    이름 : <input type="text" name="username">
    <br/>
    <input type="submit" value="인사">
</form>
_HTML_;
}

//폼을 제출하면 수행하는 함수
function process_form()
{
    print $_POST['username'] . "님 안녕하세요";
}

function validate_form()
{
    //오류를 담을 빈배열 생성
    $errors = array();

    //이름이 너무 짧으면 오류 메세지 추가
    if (strlen($_POST['username']) < 6) {
        $errors[] = '이름은 3글자 이상 입력해주세요.';
    }

    //(빈 배열일 수 도 있는) 오류 메세지 배열 반환
    return $errors;

}