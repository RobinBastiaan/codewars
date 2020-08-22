<?php declare(strict_types=1);

// https://www.codewars.com/kata/snail/train/php
// 4 kyu

function snail(array $array): array {
    if (!$array[0][0]) return [];

    $res = [];
    $len = count($array);
    $i = 0; $j = 0;
    array_push($res, $array[$i][$j]);
    while (count($res) < $len*$len) {
        if ($i < $j && $j >= $len - $i - 1) {
            $i++;
        } elseif ($i >= $j && $j > $len - $i - 1) {
            $j--;
        } elseif ($i-1 > $j && $j < $len - $i) {
            $i--;
        } else {
            $j++;
        }
        array_push($res, $array[$i][$j]);
    }
    return $res;
}