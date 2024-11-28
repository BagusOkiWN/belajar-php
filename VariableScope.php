<?php
/*
# Variable Scope #
==================
- terdapat 3 variable scope di PHP:
    1. global
    2. local
    3. static
*/


/*
# Global Scope #
================
● Variable yang dibuat diluar function memiliki scope global
● Variable di scope global hanya bisa diakses dari luar function
● Artinya di dalam function, kita tidak bisa mengakses variable di global scope
*/
// $name = "Oki"; // Global Scope

// function sayName()
// {
//     echo $name; // Error
// }

// sayName();


/*
# Local Scope #
================
● Variable yang dibuat di dalam function memiliki scope local
● Variable di scope local hanya bisa diakses dari dalam function itu sendiri
● Artinya variable tersebut tidak bisa diakses dari luar function ataupun dari function lain
*/

// function createName()
// {
//     $name = "Oki"; // local scope
// }

// createName();
// echo $name;


/*
# global keyword #
==================
● Namun jika kita ingin mengakses variable diluar function (global scope) dari dalam function, kita
bisa menggunakan kata kunci global
● Dengan menggunakan kata kunci global, maka kita bisa mengakses variable yang ada di global
scope dari dalam function
*/

$nama = "Okz"; // global scope

function sayNama()
{
    global $nama; // global keyword
    echo "Hello $nama" . PHP_EOL;
}

sayNama();


/*
# $GLOBAL Variable #
==================
● Selain menggunakan global keyword, setiap variable yang dibuat di global scope, secara otomatis
akan disimpan di dalam array $GLOBAL oleh PHP
● Jadi kita bisa menggunakan $GLOBAL variable dengan key nama variable nya dari dalam function
jika ingin mengakses global variable
● $GLOBAL adalah variable yang bersifat superglobal, artinya bisa diakses dari scope manapun
*/

function sayJeneng()
{
    echo "Hello {$GLOBALS['nama']}" . PHP_EOL;
}

sayJeneng();

/*
# Static Scope #
==================
● Secara default local variable itu siklus hidupnya hanya sebatas function nya dieksekusi
● Jika sebuah function selesai dieksekusi, maka siklus hidup local variable nya selesai
● PHP memiliki scope yang bernama static
● Static scope hanya bisa di set ke local variable
● Saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya tidak akan berhenti
ketika sebuah function selesai dieksekusi
● Artinya jika function tersebut dieksekusi lagi, maka static variable tersebut akan memiliki value
dari sebelumnya
*/

function increment()
{
    static $counter = 1;

    echo "Counter : $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();