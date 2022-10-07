<?php
$sweets = array('참깨 퍼프', '코코넛 우유 젤리',
    '흑설탕 케이크', '찹쌀경단');

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
    show_form();
}

function generate_menu($names)
{
    $html = '';
    foreach ($names as $name) {
        $html .= "<option>$name</option>\n";
    }
    return $html;
}

//폼을 표시하는 함수
function show_form()
{
    $sweets = generate_menu($GLOBALS['sweets']);
    print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
메뉴 선택 : <select name="order">
$sweets
</select>
<br/>
<input type="submit" value="주문">
</form>
_HTML_;
}

function validate_form()
{
    $errors = array();
    $input = array();

    $input['order'] = $_POST['order'];
    if (!in_array($input['order'], $GLOBALS['sweets'])) {
        $errors[] = '주문 가능한 메뉴가 아닙니다.';
    }

    //각각의 배열을 배열로 묶어서 반환.
    return array($errors, $input);
}

function process_form($input)
{
    print $input['order'] . "를(을) 주문하셨습니다.";
}