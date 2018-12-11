<?php
// if (!file_exists("welcome.txt")) {
//     die("文件不存在");
// } else {
//     $file = fopen("welcome.txt", "r");
// }
function checkNum($number)
{
    if ($number > 1) {
        throw new Exception("传入数字应该 <1");
    }
    return true;
}

try {
    checkNum(2);
    echo "正常";
} catch (Exception $e) {
    echo $e->getMessage();

}