<?php
$expire = time() + 60 * 60;
setcookie("user", "runoob", $expire);
echo $_COOKIE['user'];
setcookie("user", "", time() - $expire);
var_dump($_COOKIE);
?>
<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>

<?php
if (isset($_COOKIE["user"]))
    echo "欢迎 " . $_COOKIE["user"] . "!<br>";
else
    echo "普通访客!<br>";
?>

</body>
</html>