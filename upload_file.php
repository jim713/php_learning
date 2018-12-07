<?php
$allowedExts = array("gif", "jpeg", "jpg", "png", "txt");
$temp = explode(".", $_FILES["file"]["name"]);
var_dump($temp);
echo $_FILES["file"]["size"];
$extension = end($temp);     // 获取文件后缀名
if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/x-png")
    || ($_FILES["file"]["type"] == "image/png")
    || ($_FILES['file']['type'] == "text/plain"))
    && ($_FILES["file"]["size"] < 204800)   // 小于 200 kb
&& in_array($extension, $allowedExts)) {
    if ($_FILES["upload_file"]["error"] > 0) {
        echo "错误" . $_FILES["upload_file"]["error"] . "<br>";
    } else {
        echo "doc_name：" . $_FILES['upload_file']['name'] . "<br>";
        echo "doc_type：" . $_FILES['upload_file']['type'] . "<br>";
        echo "doc_size：" . $_FILES['upload_file']['size'] . "<br>";
        echo "doc_position：" . $_FILES['upload_file']['tmp_name'] . "<br>";
        if (file_exists("upload/" . $_FILES["file"]['name'])) {
            echo $_FILES['file']['name'] . "文件已存在";
        } else {
            move_uploaded_file($_FILES['file']['tmp_name'], "upload/" . $_FILES['file']['name']);
            echo "文件存储位置为:" . "upload/" . $_FILES['file']['name'];
        }
    }
} else {
    echo "doc_type：" . $_FILES['upload_file']['type'] . "<br>";
    echo "非法的文件格式";
}