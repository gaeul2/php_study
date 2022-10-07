<?php
//6개월 전을 나타내는 DateTime 객체생성
$range_start = new DateTime('6 months ago');

//현재를 나타내는 DateTime 객체생성
$range_end = new DateTime();

//$_POST['year']가 1900부터 2100사이의 연도인지 검사한다.
//$_POST['month']가 1부터 12사이의 월인지 검사한다.
//$_POST['day']가 1부터 31사이의 일인지 검사한다.

$input['year'] = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT,
    array('options' => array('min_range' => 1900,
        'max_range' => 2100)));