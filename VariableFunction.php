<?php
/*
# Variable Function #
=====================
- kemampuan pada PHP untuk memanggil sebuah function dari value yang terdapat di sebuah variable
- langsung memanggil $namaVariable(), jika ingin menambahkan argument, kita bisa menggunakan $namaVariable(argument)
*/
function foo()
{
    echo "FOO" . PHP_EOL;
}

function bar()
{
    echo "BAR" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

# Penggunaan Variable Function #
#==============================#
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Oki", "strtoupper");
sayHello("Oki", "strtolower");