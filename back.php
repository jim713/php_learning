<?php

/**
 * Created by PhpStorm.
 * User: weiqi
 * Date: 2018-12-07
 * Time: 09:39
 */
echo "Hello World";
echo "yes";
$name = "jim713";
echo <<<EOF
    <h1>我的第一个标题</h1>
    <p>我的第一个段落。</p>
    $name<br>
EOF;
// 结束需要独立一行且前后不能空格
$b = 1238927148971984729815298652896598217347219834721;
echo $b;
var_dump($b);
$cars = ["vov", "bmw", "benze"];
$cars2 = array("vov", "bmw", "benze");
var_dump($cars);
var_dump($cars2);
echo $cars[1] . "\n";
class cars
{
    var $color;
    function __construct($color = "green")
    {
        $this->color = $color;
    }
    function what_color()
    {
        return $this->color;
    }
}

$bmw = new cars("blue");
echo $bmw->what_color() . "\n";

// 常量
define("CORE_INFO", 123, true);
echo "\n" . CORE_INFO . "\n";
echo $_POST["fname"];
echo $_POST["age"]
?>