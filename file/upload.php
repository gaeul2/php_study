<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
$uploaddir = "C:/Bitnami/wampstack-8.1.10-0/apache2/htdocs/file/";
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "파일이 유효하고 성공적으로 저장되었습니다.\n";
} else {
    echo "파일 업로드 공격의 가능성이 있습니다.\n";
}
print_r($_FILES);
?>
</body>

</html>