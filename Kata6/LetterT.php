<?php
function printer($letter) {
    $vertical = floor($letter / 2);
    if ($letter % 2 == 0) {
        $half = $letter / 2;
        echo str_repeat("T", $half) . " " . str_repeat("T", $half) . "\n";
        $rows = $letter;
    } else {
        echo str_repeat("T", $letter) . "\n";
        $rows = $letter - 1;
    }
    for ($i = 0; $i < $rows; $i++) {
        echo str_repeat(" ", $vertical) . "T\n";
    }
}

$inputs = [5,7,4];
foreach ($inputs as $letter) {
    printer($letter);
}
?>