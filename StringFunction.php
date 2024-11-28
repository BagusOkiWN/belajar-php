<?php
/*
# String Function #
===================
● Sebelumnya saya pernah menggunakan beberapa function bawaan dari PHP untuk memanipulasi
data string.
● Sebenarnya banyak sekali function bawaan PHP yang bisa kita gunakan untuk memanipulasi string
● https://www.php.net/manual/en/ref.strings.php 

# Contoh String Function #
==========================
Function                Keterangan
join() / implode()      Menggabungkan array menjadi string
explode()               Memecah string menjadi array
strtolower()            Mengubah string menjadi lowercase
strtoupper()            Mengubah string menjadi uppercase
substr()                Mengambil sebagian string
trim()                  Menghapus whitespace di depan dan belakang string
*/

var_dump(join(",", [1, 2, 3, 4, 5]));
var_dump(explode(" ", "Bagus Oki Wijaya"));
var_dump(strtolower("BAGUS OKI WIJAYA"));
var_dump(strtoupper("bagus oki wijaya"));
var_dump(trim("     oki    "));
var_dump(substr("Bagus Oki Wijaya", 0, 3));
