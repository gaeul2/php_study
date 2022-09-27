<html>
<body>
<?php
#고급주제
//변수에 담긴 데이터 형을 검사하고 변경하기
$a = 100;
echo gettype($a); #변수a의 타입을 가져와 표시
settype($a, 'double'); #변수a의 타입을 double(실수)로 설정
echo '<br>'; #한줄띄움 <br>태그
echo gettype($a); #변수a의 타입을 가져와 표시
echo '<br>';
#가변변수 
$title = 'subject'; #변수 title의 값을 "subject"로 지정
$$title = 'PHP tutorial'; 
/* 
$[$title]이 되어서 $subject = 'PHP tutorial';이 됨
변수 subject의 값이 'PHP tutorial'로 설정됨.
*/
echo $subject;
?>
</body>
</html>