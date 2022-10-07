<?php
include 'visiable.php';

$soup = new Entree('닭고기 스프', array('닭고기', '물'));
$sandwich = new Entree('닭고기 샌드위치', array('닭고기', '빵'));

//세트메뉴
$combo = new ComboMeal('샌드위치 수프 세트', array($soup, $sandwich));

foreach (['닭고기', '물', '피클'] as $ing) {
    if ($combo->hasIngredient($ing)) {
        print "세트메뉴에 들어가는 재료 : $ing.\n";
    }
}