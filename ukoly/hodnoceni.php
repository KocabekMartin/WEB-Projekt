<?php
$studentName = "Martin Kocabek";
$test1 = 90;
$test2 = 90;
$test3 = 91;
$body = $test1 + $test2 + $test3;
$prumer = $body / 3;
$uspesnost = $body / 3;
$grade = 0;
if ($prumer > 100) {
    echo "<h2> $studentName</h2>";
    echo "<h2>Neplatne Bodovani!</h2>";
    echo "<h2>Vice bodu nez by melo byt!</h2>";
}
elseif ($prumer < 0) {
    echo "<h2> $studentName</h2>";
    echo "<h2>Neplatne Bodovani!</h2>";
    echo "<h2>Mene bodu nez by melo byt</h2>";
}
else {
    if ($prumer >= 90) {
        $grade = 1;
    }
    elseif ($prumer >= 75) {
        $grade = 2;
    }
    elseif ($prumer >= 60) {
        $grade = 3;
    }
    elseif ($prumer >= 40) {
        $grade = 4;
    }
    elseif ($prumer >= 0) {
        $grade = 5;
    }
    echo "<h3>Jmeno : $studentName</h3>";
    echo "<h3>Test 1 :  $test1 bodů </h3>";
    echo "<h3>Test 2 :  $test2 bodů </h3>";
    echo "<h3>Test 3 :  $test3 bodů </h3>";
    echo "<h3>Ziskany pocet bodů : $body / 300</h3>";
    echo "<h3>Prumer bodu : $prumer </h3>";
    echo "<h3>Procentualni uspesnost : $uspesnost % </h3>";
    echo "<h1>------------------------</h1>";
    echo "<h1>Vysledna znamka: $grade </h1>";
    echo "<h1>------------------------</h1>";

    if ($grade == 1){
        echo "<h2>Vyborny</h2>";
    }
    elseif ($grade == 2){
        echo "<h2>Chvalitebny</h2>";
    }
    elseif ($grade == 3){
        echo "<h2>Dobry</h2>";
    }
    elseif ($grade == 4){
        echo "<h2>Dostacujici</h2>";
    }
    elseif ($grade == 5){
        echo "<h2>Nedostacujici</h2>";
    }
    if ($grade >= 1 && $grade <= 4) {
        echo "<h2>Skvela prace</h2>";
    }
    elseif ($grade == 5){
        echo "<h2>Nic moc, tady jsou bonusove ulohy:</h2>";
        echo "<h2>1 + 1</h2>";
    }



}

