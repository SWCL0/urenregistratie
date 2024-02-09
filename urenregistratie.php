<?php

// Aanmaak alle arrays en variabelen
$dag = array("Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag");
$uren = 0;
$minuten = 0;
$werkdagen = 5;

// Ga door elke dag heen
foreach ($dag as $dagen) {
    echo "Werkdag: $dagen" . PHP_EOL;
    echo "Aantal uur: ";
    $uur = readline();
    echo "Aantal minuten: ";
    $minuut = readline();
 
// Check of er die dag is gewerkt
    if (($uur == 0) && ($minuut == 0)) {
        $werkdagen--;
    }

// Voeg de tijd bij de andere tijd op
    $uren = $uren + $uur;
    $minuten = $minuten + $minuut;
} 

// Weergeef alle info
echo "Aantal werkdagen: " . $werkdagen . PHP_EOL;
echo "Totale werktijd: " . $uren . " uur en " . $minuten . " minuten" . PHP_EOL;

?>