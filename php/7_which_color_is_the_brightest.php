<?php declare(strict_types=1);

// https://www.codewars.com/kata/62eb800ba29959001c07dfee
// 7 kyu

function brightest(array $colors)
{
  $v = array_map('getV', $colors);
  
  arsort($v);
  
  return $colors[key($v)];
}

function getV(string $color): int
{
  [$r, $g, $b] = str_split(substr($color, 1), 2);
  
  return max(intval($r, 16), intval($g, 16), intval($b, 16));
}