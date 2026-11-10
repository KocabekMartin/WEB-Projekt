<?php
echo "<h1>Ukol 1</h1>";
$max = 8;
for ($i = 1 ; $i <= $max; ++$i) {
    echo "<h2>$i</h2>";
    "<br>";
}
echo "<br>";
echo "<h1>Ukol 2</h1>";
for ($i = 2; $i <= 20; $i += 2) {
    echo "<h2>$i</h2>";
}
echo "<br>";
echo "<h1>Ukol 2 druhe reseni</h1>";
$i = 1;
while ($i <= 20) {
    if ($i % 2 == 0) {
        echo "<h2>$i</h2>";
    }
    $i++;
}
echo "<br>";
echo "<h1>Ukol 3</h1>";
$number = 7;
for ($i = 1; $i <= 10; $i++) {
    $vypocet = $number * $i;
    echo "<h2>$number * $i = $vypocet</h2>";
}
echo "<br>";
echo "<h1>Ukol 4</h1>";
$cislo1 = 23;
$cislo2 = 34;
$sum = $cislo1 + $cislo2;
echo "<h2>$cislo1 + $cislo2 = $sum</h2>";


