<?php
$pi = "31415926535897932384626433832795028841971693993751058209749445923078164062862089986280348253421170679";

$pos = 0;

while (true) {
    $input = readline("Press Enter for next digit:");

    if ($pos >= strlen($pi)) {
        echo "All supported digits revealed!!\n";
        break;
    }
    $pos++;
    $currentDigits = "3.14" . substr($pi, 1, $pos - 1);
    echo "Pi so far: $currentDigits\n";
}
?>