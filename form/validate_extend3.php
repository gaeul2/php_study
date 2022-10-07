<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //validate_form()함수가 반환하는 $errors와 $input을 리스트에 담는다.
    list($form_errors, $input) = validate_form();
    //validate_form()이 오류메시지 배열을 반환하면 show_form()에 전달한다.
    if ($form_errors) {
        show_form($form_errors);
    } else {
        process_form($input);
    }
} else {
    show_form(0);
}

function validate_form()
{
    $errors = array();
    $input = array();

    //배열의 'age' 키값으로 원소 담음
    $input['age'] = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    if (is_null($input['age']) || ($input['age'] === false)) {
        $errors[] = "나이를 정확하게 입력해주세요";
    }

    $input['price'] = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
    if (is_null($input['price']) || ($input['price'] === false)) {
        $errors[] = "가격을 정확하게 입력해주세요";
    }

    //$_POST['name']이 설정되지 않았을 경우를 대비해 널 병합 연산자 사용
    //값이 null이아니면 그값, null이면 ''빈문자열 반환토록하는 연산자
    $input['name'] = trim($_POST['username'] ?? '');
    if (strlen($input['name']) == 0) {
        $errors = "이름을 입력해주세요";
    }

    //각각의 배열을 배열로 묶어서 반환.
    return array($errors, $input);
}

function process_form($input)
{
    print $input['name'] . "님 안녕하세요";
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
나이 : <input type="text" name="age">
가격 : <input type="text" name="price">
<input type="submit" value="인사">
</form>
_HTML_;
}