<?php
/*
# Else Statement #
==================
- block if akan dieksekusi apabila if adalah true

# Syntax Else Statement #
=========================
if (expression)
    statement;
else
    statement;

if (expression) {
    statement1;
    statement2;
} else {
    statement;
}
*/

$nilai = 70;
$absen = 80;

if ($nilai >= 75 && $absen >= 75) {
    echo "Anda Lulus" . PHP_EOL;
} else {
    echo "Anda Tidak Lulus" . PHP_EOL;
}