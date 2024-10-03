<?php
function linearSearch($array, $target) {
    foreach ($array as $element) {
        if ($element == $target) {
            return true;
        }
    }
    return false;
}

$array = range(1, 10000);
$target = 9999;
$startTime = microtime(true);
$result = linearSearch($array, $target);
$endTime = microtime(true);
$executionTime = $endTime - $startTime;

echo "Lineair zoeken resultaat: " . ($result ? 'Gevonden' : 'Niet gevonden') . "\n";
echo "Tijd: " . $executionTime . " seconden\n";
?>
