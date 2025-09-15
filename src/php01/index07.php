<?php
function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}

$total = text(2,3);
echo $total;

function practice($score1, $score2, $score3)
{
    $total= $score1 + $score2 + $score3;
    if ($total>210) {
        echo "合格点は" . $total . "なので合格です。";
    } else {
        echo "合格点は" . $total . "なので不合格です。";
    }
}

$exam = practice(60,40,90);
echo $exam;

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);