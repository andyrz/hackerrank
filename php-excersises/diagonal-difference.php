<?php
/*
*   Hacker Rank
*   Diagonal Difference 
*   https://www.hackerrank.com/challenges/diagonal-difference/problem
*   First Visted: 8/8/2018
*
*/
function diagonalDifference($arr) {
    $size = sizeof($arr);
    $ltrdiag = 0;
    $rtldiag = 0;
    for($i = 0; $i < $size; $i++){
        $ltrdiag += $arr[$i][$i];
        $rtldiag += $arr[$i][$size-$i-1];
    }
    return abs($ltrdiag - $rtldiag);
}

$fptr = fopen("diagonal-difference.txt", "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$arr = array();

for ($i = 0; $i < $n; $i++) {
    fscanf($stdin, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
