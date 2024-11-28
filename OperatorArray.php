<?php
/*
# Operator Array #
==================

Contoh      Nama        Keterangan
$a + $b     Union       Menggabungkan array a$ dan $b
$a == $b    Equality    true jika $a dan $b memiliki key-value sama
$a === $b   Identify    true jika $a dan $b memiliki key-value sama dan posisi sama
$a != $b    Inequality  true jika $a dan $b tidak sama
$a <> $b    Inequality  true jika $a dan $b tidak sama
$a !== $b   Nonidentify true jika $a dan $b tidak idnetik
*/

$first = [
    "first_name" => "Bagus"
];
$last = [
    "last_name" => "Oki"
];
var_dump($first + $last);

$a = [
    "first_name" => "Bagus",
    "last_name" => "Oki"
];

$b = [
    "last_name" => "Oki",
    "first_name" => "Bagus"
];

var_dump($a == $b);
var_dump($a === $b);
