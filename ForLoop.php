<?php 
/*
# For Loop #
============
- for adalah salah satu kata kunci untuk melakukan perulangan

# Syntax #
==========
for (init statement; kondisi; post statement) {
    // block perulangan //
}

● Init statement akan dieksekusi hanya sekali di awal sebelum perulangan
● Kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti
● Post statement akan dieksekusi setiap kali diakhir perulangan
● Init statement, Kondisi dan Post Statement tidak wajib diisi, jika Kondisi tidak diisi, berarti kondisi selalu bernilai true
*/

// # Infinite Loop # //
//==================//
// for (; ;) {
//     echo "Aku Sayang Kamu" . PHP_EOL;
// }

// # Perulangan Dengan Kondisi # //
//==============================//
$i = 1;
for (; $i <= 10;){
    echo "Hello For Loop: " . $i . PHP_EOL;
    $i++;
}

// # Perulangan Dengan Init Statement # //
//=====================================//
for ($i = 1; $i <= 10;){
    echo "Hello For Loop: " . $i . PHP_EOL;
    $i++;
}

// # Perulangan Dengan Post Statement # //
//=====================================//
for ($i = 1; $i <= 10; $i++){
    echo "Hello For Loop: " . $i . PHP_EOL;
}

// # Alternative Syntax For Loop # //
//================================//
for ($i = 1; $i <= 10; $i++):
    echo "Hello For Loop: " . $i . PHP_EOL;
endfor;