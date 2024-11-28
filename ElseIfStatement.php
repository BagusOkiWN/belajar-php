<?php
/*
# Else If Statement #
=====================
- digunakan saat ingin membuat beberapa kondisi

# Syntax Else If Statement #
=============================
if (expression)
    statement;
elseif (expression)
    statement;
else 
    statement;

if (expression) {
    statement1;
    statement2;
} elseif (expression) {
    statement;
} else {
    statement;
}
*/

$nilai = 70;
$absen = 70;

if($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70){
    echo "Nilai Anda B" . PHP_EOL;
} elseif ($nilai >= 60 && $absen >= 60 ){
    echo "Nilai Anda C" . PHP_EOL;
} elseif ($nilai >= 50 && $absen >= 50 ){
    echo "Nilai Anda D" . PHP_EOL;
} else {
    echo "Nilai Anda E" . PHP_EOL;
}

// If Statement dengan Colon //
//==========================//
if($nilai >= 80 && $absen >= 80) :
    echo "Nilai Anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70)  :
    echo "Nilai Anda B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60 ) :
    echo "Nilai Anda C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50 ) :
    echo "Nilai Anda D" . PHP_EOL;
else :
    echo "Nilai Anda E" . PHP_EOL;
endif;