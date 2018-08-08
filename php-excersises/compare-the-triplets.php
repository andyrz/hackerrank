<?php
/*
*   Hacker Rank
*   Compare The Triplets 
*   https://www.hackerrank.com/challenges/compare-the-triplets/
*   First Visted: 8/8/2018
*
*/
function compareTriplets($a, $b) {
    $res = array(0, 0);
    for($i = 0; $i < 3; $i++){
        if($a[$i] > $b[$i]){
            $res[0] = $res[0] + 1;
        }
        if($a[$i] < $b[$i]){
            $res[1] = $res[1] + 1;
        }
    }
    return $res;
}

$fptr = fopen("Compare-the-triplets.txt", "w");

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$b_temp = rtrim(fgets(STDIN));

$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = compareTriplets($a, $b);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
