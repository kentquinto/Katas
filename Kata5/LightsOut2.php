<?php

function printGrid($grid) {
    foreach (array_reverse($grid) as $row) {
        echo implode(' ', $row) . "\n";
    }
    echo "\n";
}

function isGameOver($grid) {
    $flat = array_merge(...$grid);
    return count(array_unique($flat)) === 1;
}

$grid = [
    [1, 0, 1, 0],
    [0, 1, 0, 1],
    [1, 0, 1, 0],
    [0, 1, 0, 1],
];

echo "Initial grid:\n";
printGrid($grid);

while (true) {
    if (isGameOver($grid)) {
        echo "You win! All tiles are in the same state.\n";
        break;
    }

    $input = readline("Enter col and row (e.g. '0,1'): ");

    $parts = explode(',', $input);
    $row   = (int) $parts[0];
    $col   = (int) $parts[1];

    if ($row < 0 || $row > 3 || $col < 0 || $col > 3) {
        echo "Invalid! Numbers must be between 0 and 3\n";
        continue;
    }

    if ($row > 0) $grid[$row - 1][$col] ^= 1;
    if ($row < 3) $grid[$row + 1][$col] ^= 1;
    if ($col > 0) $grid[$row][$col - 1] ^= 1;
    if ($col < 3) $grid[$row][$col + 1] ^= 1;

    printGrid($grid);
}
