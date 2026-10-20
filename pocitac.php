<?php
$pocitac = "Herni PC"; //string
$vyrobce = "Alienware"; //string
$ram = "32"; //int
$uloziste = "1.5"; //float
$ssd = true; // bool
$os = "Windows 11"; //string

echo "<h1>Profil meho pocitace:</h1>";
echo "<p>Tohle je muj <strong>$pocitac</strong></p>";
echo "<p>Je od znacky <strong>$vyrobce</strong></p>";
echo "<p>Ma <strong>$ram</strong> GB pameti</p>";
echo "<p>Ma <strong>$uloziste</strong> TB uloziste</p>";
echo "<p>Stav SSD: <strong>$ssd</strong></p>";
echo "<p>Pocitac ma operacni system <strong>$os</strong></p>";

echo "<h1>Datove typy</h1>";
echo "<p>Pocitac</p>"; var_dump($pocitac);