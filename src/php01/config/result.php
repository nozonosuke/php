<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$items = htmlspecialchars($_POST["items"], ENT_QUOTES);
$number = htmlspecialchars($_POST["number"], ENT_QUOTES);

print "私の名前は" . $name . "<br/>";
print "ご希望の商品は" . $items . "<br/>";
print "注文数は" . $number;
