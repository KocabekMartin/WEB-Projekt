<?php
/*
$auto = [
"Značka" => "Škoda Octavia",
"Rok výroby" => 2021,
"Palivo" => "Benzín",
"Výkon" => "110 kW"
];
echo "<table border='1'>";
foreach ($auto as $parametr => $hodnota) {
echo "<tr><th>$parametr</th><td>$hodnota</td></tr>";}
echo "</table>";
*/
echo "<h1>Ukol A</h1>";
$movies = ["Shrek", "Avengers : Endgame", "Harry Potter a kamen mudrcu", "Obcansky Prukaz"];
echo "<h2>$movies[0]<br>$movies[3]</h2>";

$movies[] = "Garfield";
$pocet = count($movies);

echo "<h2>Finalni pocet filmu = $pocet </h2>";
echo "<br>";

echo "<h1>Ukol B</h1>";
echo "<ol>";
foreach ($movies as $movie) {
echo "<li>$movie</li>";
}
echo "</ol>";
echo "<br>";

echo "<h1>Ukol C</h1>";
$grades = [1, 2, 1, 3, 2, 1, 4];
$sum = 0;
$count = count($grades);
foreach ($grades as $grade) {
    $sum = $grade + $sum;
}
$prumer = $sum / $count;
round($prumer, 2);
echo "<h2>Prumer je $prumer <br> Pocet znamek je $count <br> Sectene znamky: $sum</h2>";
echo "<br>";

echo "<h1>Ukol D</h1>";
$temperatures = [18, 22, 25, 19, 27, 24, 16];
$pocet = 0;
foreach ($temperatures as $temperature) {
    if ($temperature >= 23) {
        echo "<h2>$temperature °C</h2>";
        $pocet++;
    }
}
echo "<h2>Pocet teplot alespon s 23 °C je $pocet</h2>";
echo "<br>";

echo "<h1>Ukol E</h1>";
$product = [
    "Nazev" => "Kostka",
    "Kategorie" => "Zabava",
    "Cena" => "2000",
    "Skladem" => "Ano"
];
echo "<table border='1'>";
foreach ($product as $klic => $value) {
    echo "<tr><th>$klic</th><td>$value</td></tr>";
}
echo "</table>";
echo "<br>";

echo "<h1>Ukol F</h1>";
$coupons = ["LETO20", "STUDENT15", "VIP50"];
$enteredCoupon = "VIP50";
if (in_array($enteredCoupon, $coupons)) {
    echo "<h2>Platny Kupon</h2>";
}
else {
    echo "<h2>Neplatny Kupon</h2>";
}
echo "<br>";

echo "<h1>Ukol G</h1>";
//Najdete chybu v kodu
//Spatny kod
/*
$points = [12, 18, 25, 30];

echo $points;

foreach ($points as $point){
   echo "Body: $points<br>";
}

echo "Posledni hodnota: " . points[4];
*/

//Opraveny kod
echo "<h2>Chyby v kodu:<br> 1.Points[4] ma byt 3 protoze se cisluje od 0 <br> 2.foreach na point ale pouzije points <br> 3.Echo points nic neudela protoze je to pole</h2>";
