<?php
/*
# goto Operator #
=================
- goto adalah ﬁtur dimana kita bisa loncat ke kode program sesuai dengan keinginan kita
*/
goto a;
echo "Hello A" . PHP_EOL;

a:
echo "Hello A" . PHP_EOL;

# goto Operator di Loop #
#=======================#
$i = 1;

while (true) {
    echo "While Loop $i" . PHP_EOL;
    $i++;
    if ($i > 10) {
        goto end;
    }
}

end:
echo "End Loop";