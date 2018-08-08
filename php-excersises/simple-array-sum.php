<?php
/*
*   Hacker Rank
*   Simple Array Sum 
*   https://www.hackerrank.com/challenges/simple-array-sum/
*   First Visted: 7/29/2018
*
*/

function simpleArraySum($ar) {
  $sum = 0;
  $numElem = sizeof($ar);
  for($x = 0; $x < $numElem; $x++){
      $sum = $sum + $ar[$x];
  }
  return $sum;
}

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr2 = array_map('intval', $arr);

echo simpleArraySum($arr2);
