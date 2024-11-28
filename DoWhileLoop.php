<?php
/* 
# Do While Loop #
=================
- perulangan yang mirip dengan while
- perbedannya pada pengecekan kondisi
- while loop pengecekan kondisinya di awal sedangkan do while setelah perulangan terjadi
- dalam do while loop, minimal pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai true
*/
$i = 100;

do {
    echo "Hello While Loop: " . $i . PHP_EOL;
    $i++;
} while ($i <= 10);