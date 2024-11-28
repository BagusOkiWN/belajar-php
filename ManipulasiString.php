<?php
/*
# Dot Operator #
================
- dot operator dapat digunakan untuk menambahkan string dengan data lain
*/

$name = "Bagus Oki";

echo "Nama: " . $name . PHP_EOL;
echo "Nilai: " . 100 . "\n";


// Konversi ke Number dan Sebaliknya //
//==================================//
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"9.5";
var_dump($valueFloat);


/* 
# Mengakses Karakter #
======================
- string di PHP bisa diakses dengan kurung siku, seperti pada array
- index pertama dimulai dari 0
- jika mengakses lebih dari jumlah index akan terjadi error
*/

$nama = "Oki";
echo $nama[0] . PHP_EOL;
echo $nama[1] . PHP_EOL;
echo $nama[2] . PHP_EOL;


/*
# Variable Parsing #
====================
- khusus string menggunakan double quote atau heredoc, dapat menggunakan karakter $ untuk mengakses variable
- cara menggunakannya adalah dengan menggunakan karakter $ lalu diikuti dengan nama variable
*/
echo "Hallo $nama, Selamat Belajar" . PHP_EOL;


/*
# Curly Brace #
===============
- di PHP dapat menggunakan kurung kurawal sebelum menggunakan variable parsing
*/
$var = "var";
echo "This is {$var}s" . PHP_EOL;