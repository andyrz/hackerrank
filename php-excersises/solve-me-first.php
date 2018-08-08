<?php
/*
*   Hacker Rank
*   Solve Me First Practice Excercises
*   https://www.hackerrank.com/challenges/solve-me-first/
*   Revisted: 7/29/2018
*
*/

function solveMeFirst($a,$b){
    return $a + $b;
}
    $handle = fopen ("php://stdin","r");
    $_a = fgets($handle);
    $_b = fgets($handle);
    $sum = solveMeFirst((int)$_a,(int)$_b);
    print ($sum);
    fclose($handle);
?>