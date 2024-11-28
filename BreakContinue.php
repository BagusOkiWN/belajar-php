<?php
/*
# Break & Continue #
====================
● Pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch
● Sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan.
● Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya
*/

# Break #
#=======#
$i = 1;

while (true){
    echo "Hello Break :" . PHP_EOL;
    $i++;

    if ($i > 10) {
        break;
    }
}

# Continue #
#==========#
for ($i = 0; $i <= 100;  $i++){
    if($i %2 == 0){
        continue;
    }
    echo "Hello Continue" . $i . PHP_EOL;
}