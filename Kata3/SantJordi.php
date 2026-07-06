<?php

$books = ['Maze Runner', 'Harry Potter', 'The Hungers Games', 'The Lord of the Rings', 'Dunes'];
$roses = ['Red', 'Yellow', 'White', 'Pink', 'Orange'];

$input = readline("Choose your gift! (book/rose)");

if (strtolower($input) === 'book') {
    $random = $books[array_rand($books)];
    echo "Your random book is: $random\n";
} elseif (strtolower($input) === 'rose') {
    $random = $roses[array_rand($roses)];
    echo "Your random rose is: $random rose\n";
} else {
    echo "Please type 'book' or 'rose'\n";
}
?>