<?php
/*
# Reference #
=============
● Reference adalah mengakses variable yang sama dengan nama variable yang berbeda
● Reference di PHP tidak sama dengan reference di bahasa pemrograman seperti C / C++ yang
memiliki ﬁtur pointer
● Analogi Reference itu seperti ﬁle, jika variable adalah ﬁle, dan value nya adalah isi ﬁle nya, maka
reference adalah membuat shortcut (di Windows) atau alias (di Linux / Mac) terhadap ﬁle yang
sama
● Saat kita mengubah isi value dari reference, maka secara otomatis value variable aslinya pun
berubah
● Untuk membuat reference terhadap variable, kita bisa menggunakan karakter & 
*/

/*
# Assign By Reference #
#=====================#
● Pertama, PHP Reference bisa memungkinkan kita bisa membuat beberapa variable menuju ke
value yang sama
*/
$name = "Oki";

$otherName = &$name;
$otherName = "Budi";

echo $name . PHP_EOL;


/*
# Pass By Reference #
#=====================#
● Selanjutnya yang bisa dilakukan di PHP adalah, mengirim data ke function dengan reference
*/
// function increment(int &$value)
// {
//     $value++;
// }

// $counter = 1;
// increment($counter);

// echo $counter . PHP_EOL;

/*
# Returning References #
#=====================#
● PHP juga bisa mengembalikan reference pada function
● Namun hati-hati, gunakan ﬁtur ini jika memang ada alasannya, karena ﬁtur ini bisa membingungkan
*/

function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;