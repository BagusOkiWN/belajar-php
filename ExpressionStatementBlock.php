<?php
/*
# Expression #
==============
- Semua kode yang ditulis adalah Expression
- Expression adalah apapaun yang memiliki Nilai atau Value
*/

// Expression Sederhana
$a = 5;
$b = $a;

// Expression Complex
function getValue()
{
    return 100;
}
$value = getValue();

/*
# Statement #
=============
- kalimat lengkap dalam bahasa
- statement berisikan execution komplit dan diakhiri titik koma
*/

$name = "Bagus Oki Wijaya Nugroho";

echo $name;

$date = new DateTime();

/*
# Block #
=========
- kumpulan statement yang terdiri dari nol atau lebih statement
- block diawali dan diakhiri dengan kurung kurawal {}
*/

function runApp($name)
{
    echo "Start Program" . PHP_EOL;
    echo "Hello $name" . PHP_EOL;
    echo "End Program" . PHP_EOL;
}
