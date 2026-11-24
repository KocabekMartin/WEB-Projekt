<?php
echo "<h1>A – Seznam položek</h1>";
$items = ["Mys", "Klavesnice", "Sluchatka", "Mikrofon", "Kamera"];
echo "<ul>";
foreach ($items as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";

echo "<br>";
echo "<h1>B – Statistika cen</h1>";
$prices = [890, 450, 4200, 1150, 990];
$sum = 0;
$pocet = count($prices);
foreach ($prices as $price) {
    $sum = $sum + $price;
}
$average = $sum / $pocet;
round($average, 2);

echo "<h2>Celkova cena: $sum <br> Pocet cen: $pocet <br> Prumer za produkt: $average</h2>";

echo "<br>";
echo "<h1>C – Dražší zboží</h1>";
$drazsi = 0;
foreach ($prices as $price) {
    if ($price > 1000) {
        $drazsi++;
    }
}
echo "<h2>Produktu nad 1000kc je: $drazsi</h2>";

echo "<br>";
echo "<h1>D – Karta dodavatele</h1>";
$supplier = [
  "Firma" => "Alza",
  "Mesto" => "Praha",
  "ICO" => "5701282",
  "Doprava zdarma" => "Ano"
];
echo "<table border='1'>";
foreach ($supplier as $klic => $value) {
    echo "<tr><th>$klic</th><td>$value</td></tr>";
}
echo "</table>";

echo "<br>";
echo "<h1>E – Kontrola položky</h1>";
$hledany = "Monitor";
echo "<h2>Obsahuje items polozku $hledany?</h2>";
if (in_array($hledany, $items)){
    echo "<h2>Ano obsahuje $hledany</h2>";
}
else {
    echo "<h2>Ne neobsahuje $hledany</h2>";
}