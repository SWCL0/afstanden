<?php

$waarde = $_POST["waarde"];
$currentGrootheid = $_POST["currentGrootheden"];
$gewensteGrootheid = $_POST["gewensteGrootheden"];
$arrayGrootheden = array("Kilometer", "Hectometer", "Decameter", "Meter", "Decimeter", "Centimeter", "Millimeter");
$outputLang = $waarde;
$output = $waarde;

$keyCurrent = array_search($currentGrootheid, $arrayGrootheden);
$keyGewenst = array_search($gewensteGrootheid, $arrayGrootheden);

$verschil = $keyGewenst - $keyCurrent;

if ($verschil > 0) {
    for ($i = 0; $i < $verschil; $i++) {
        $outputLang = $outputLang * 10;
    } 
    $endOutput = number_format($outputLang, 0, ' ', '.');
    echo $output;
} elseif ($verschil < 0) {
    $verschilCorrect = $verschil * -1; 
    for ($i = 0; $i < $verschilCorrect; $i++) {
        $output = $output / 10;
    }
    $formattedOutput = sprintf("%.10f", $output);
    $endOutput = rtrim($formattedOutput, '0');
    echo $endOutput;
} else {
    echo "Niks veranderd, zelfde grootheid! Waarde: " . $waarde;
}

header("Location: afstanden.php?result=" . urlencode($endOutput));
exit;

?>