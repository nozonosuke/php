<?php
$a = 7;
$people = "Saburo";

$b = ($a> 4)?
"TRUE":"FALSE";
echo $b;

switch ($people) {
    case "Taro":
        echo "太郎です。";
        break;
    case "Jiro":
        echo "次郎です。";
        break;
    case "Saburo":
        echo "三郎です。";
        break;
}
