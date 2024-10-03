<?php
function binarySearch($array, $target, $low, $high) {
    if ($low > $high) {
        return false;
    }
    $mid = floor(($low + $high) / 2);
    if ($array[$mid] == $target) {
        return true;
    } elseif ($array[$mid] > $target) {
        return binarySearch($array, $target, $low, $mid - 1);
    } else {
        return binarySearch($array, $target, $mid + 1, $high);
    }
}

$array = range(1, 10000);
$target = 9999;
$startTime = microtime(true);
$result = binarySearch($array, $target, 0, count($array) - 1);
$endTime = microtime(true);
$executionTime = $endTime - $startTime;

echo "Binair zoeken resultaat: " . ($result ? 'Gevonden' : 'Niet gevonden') . "\n";
echo "Tijd: " . $executionTime . " seconden\n";
?>
