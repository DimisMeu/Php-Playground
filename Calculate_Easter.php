<?php
function getEasterDate($year) {
  $a = $year % 19;
  $b = intval($year / 100);
  $c = $year % 100;
  $d = intval($b / 4);
  $e = $b % 4;
  $f = intval(($b + 8) / 25);
  $g = intval(($b - $f + 1) / 3);
  $h = (19 * $a + $b - $d - $g + 15) % 30;
  $i = intval($c / 4);
  $k = $c % 4;
  $l = (32 + 2 * $e + 2 * $i - $h - $k) % 7;
  $m = intval(($a + 11 * $h + 22 * $l) / 451);
  $month = intval(($h + $l - 7 * $m + 114) / 31);
  $day = (($h + $l - 7 * $m + 114) % 31) + 1;
  return "$month/$day/$year";
}

$easterDate = getEasterDate(2023);
echo $easterDate;
?>
