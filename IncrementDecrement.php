<?php
/*
# Increment dan Decrement #
===========================
- untuk menurunkan dan menaikkan data

Contoh      Name                Efek
$a++        Post Increment      Kembalikan $a lalu naikkan 1 angka
++$a        Pre Increment       Naikkan $a satu angka, lalu kembalikan $a
$a--        Post Decrement      Kembalikan $a lalu turunkan 1 angka
--$a        Pre Decrement       Turunkan $a satu angka, lalu kembalikan $a
*/

$a = 10;
$b = ++$a;

var_dump($b);
var_dump($a);

$c = 12;
$d = --$c;

var_dump($d);
var_dump($c);