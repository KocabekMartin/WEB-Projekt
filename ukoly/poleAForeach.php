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
echo "<h2>$movies[0]</h2>";
echo "<h2>$movies[3]</h2>";

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
echo "<h2>Prumer je $prumer</h2>";
echo "<h2>Pocet znamek je $count</h2>";
echo "<h2>Sectene znamky: $sum</h2>";
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
