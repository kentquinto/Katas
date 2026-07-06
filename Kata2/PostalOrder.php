<?php
$queue    = [];
$counters = ['C' => 45, 'E' => 19, 'R' => 7, 'O' => 0, 'I' => 0];

$type = 'C';
$counters[$type]++;
$queue[] = $type . $counters[$type];

$counters[$type]++;
$queue[] = $type . $counters[$type];

$type = 'E';
$counters[$type]++;
$queue[] = $type . $counters[$type];

echo "Queue: " . implode(', ', $queue) . "\n";

while (!empty($queue)) {
    $turn = array_shift($queue);
    echo "Calling:  $turn\n";
    echo "Attended: $turn - done!\n";
}
?>