<?php
/* 
# While Loop #
==============
- perulangan yang lebih sederhana daripada for loop
- hanya terdapat kondisi perulangan tanpa ada init dan post statement
*/

$i = 1;

while ($i <= 10) {
    echo "Hello While Loop: " . $i . PHP_EOL;
    $i++;
}

# Alternative Syntax #
#====================#
while ($i <= 10) :
    echo "Hello While Loop: " . $i . PHP_EOL;
    $i++;
endwhile;
