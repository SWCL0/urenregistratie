<?php

$dag = array("Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag");
$uren;
$minuten;
$werkdagen = 5;
$langsteWerkdag;

foreach ($dag as $dagen) {
    echo "Werkdag: $dagen" . PHP_EOL;
    echo "Aantal uur: ";
    $uren = readline();
    echo "Aantal minuten: ";
    $minuten = readline();

    if (($uren == 0) && ($minuten == 0)) {
        $werkdagen--;
    }
}

echo "Aantal werkdagen: " . $werkdagen . PHP_EOL;
echo "Totale werktijd: $uren uur en $minuten minuten" . PHP_EOL;
echo "Langste werkdag: $langsteWerkdag";




?>