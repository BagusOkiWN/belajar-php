<?php
/*
● PHP memiliki banyak sekali function dengan preﬁx is_
● Function-function ini rata-rata digunakan untuk mengecek tipe data dari sebuah data
● https://www.php.net/manual/en/ref.var.php 

# Contoh Is Function #
======================
Function            Keterangan
is_string()         Apakah tipe data string
is_bool()           Apakah tipe data boolean
is_int()            Apakah tipe data number integer
is_float()          Apakah tipe data number floating point
is_array()          Apakah tipe data array
is_callable()       Apakah tipe data callable
*/

$data = "sample";

var_dump(is_bool($data));
var_dump(is_int($data));
var_dump(is_float($data));
var_dump(is_array($data));
var_dump(is_string($data));