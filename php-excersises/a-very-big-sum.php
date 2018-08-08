<?php
/*
*   Hacker Rank
*   A Very Big Sum 
*   https://www.hackerrank.com/challenges/a-very-big-sum/problem
*   First Visted: 8/8/2018
*
*/
function aVeryBigSum($ar) {
    $sum = 0;
    $numElem = sizeof($ar);
    for($x = 0; $x < $numElem; $x++){
        $sum = $sum + $ar[$x];
    }
    return $sum;
}

$fptr = fopen("a-very-big-sum.txt", "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = aVeryBigSum($ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
