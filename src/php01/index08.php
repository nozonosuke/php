<?php
$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {
    print $person . "は" . $name . "です" . "<br/>";
}


$people1 = [
    ["Taro", 25, "men"],
    ["Jiro", 20, "men"],
    ["hanako", 16, "women"]
];

foreach ($people1 as $person) {
    echo $person[0] . "(" . $person[1] . "歳" . $person[2] . ")" . "<br/>";
}