<?php
/*
# Anonymous Function #
======================
- merupakan function tanpa nama, disebut juga dengan Closure
- biasanya digunakan sebagai argument atau value di variable
- anonymous function membuat kita dapat mengirim sebagai argument di function lain
*/

$sayHello = function (string $name){
    echo "Hello $name" . PHP_EOL;
};
$sayHello("Oki");
$sayHello("Ikoo");

# Anonymous Function Sebagai Argument #
#=====================================#
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Oki", function (string $name) {
    return strtoupper($name);
});


/*
# Mengakses Variable di Luar Closure #
======================================
- secara default, anonymous function tidak bisa mengakses variabel yang terdapat diluar function
- Jika ingin menggunakan variable yang terdapat diluar anonymous function, harus secara explicit menyebutkannya menggunakan kata kunci use lalu diikuti variable-variable yang ingin digunakan
*/

$firstName = "Bagus";
$lastName = "Oki";

$sayHelloOki = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloOki();
