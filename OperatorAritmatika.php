<?php

/*
# Operator Aritmatika #
=======================
+$variable, bilangan positif
-$variable, bilangan negatif
$variable + $variable, penambahan
$variable - $variable, pengurangan
$variable * $variable, perkalian
$variable / $variable, pembagian
$variable % $variablem sisa bagi (modulo)
$variable**$variable, pangkat
*/

$result = 10 + 10;
var_dump($result);
echo "\n";
$result = 100 % 3;
var_dump($result);

/*
# Operator Penugasan Aritmatika #
bisa dibilang shortcut

Penugasan       Keterangan
$a += $b        $a = $a + b
$a -= $b        $a = $a - b
$a *= $b        $a = $a * b
$a /= $b        $a = $a / b
$a %= $b        $a = $a % b
*/

$total = 0;

$buah = 10000;
$ayam = 35000;
$jus = 14000;

$total += $buah;
$total += $ayam;
$total += $jus;

var_dump($total);