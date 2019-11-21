<?php
// Constantinopel Arrayicuz
$boi = array(
    500,
    200,
    100,
    50,
    20,
    10,
    5,
    2,
    1,
);

// Centicus Autismus
$gorl = array(
    50,
    20,
    10,
    5,
);

// AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
$boomer = $argv[1];
$largeMilkshake = intval(floor($boomer));
$smolMilkshake = intval(round(($boomer - $largeMilkshake) * 100));

// Honey loops met 4 granen en honing
function Euro ($boi, $boomer) {
    foreach ($boi as $yeet) {
        if ($boomer >= $yeet) {
            $moneh = floor($boomer / $yeet);
            $boomer %= $yeet;
            echo "$moneh x €$yeet euro" . PHP_EOL;
        }
    };
}

// Kinecct
Function Cent ($gorl, $smolMilkshake) {
    $leftovers = $smolMilkshake;
    foreach ($gorl as $rich) {
        if ($leftovers >= $rich) {
            $muniez = floor($leftovers / $rich);
            $leftovers %= $rich;
            echo "$muniez x €$rich cent" . PHP_EOL;
        }
    }
}

try {
    if (is_null($boomer)){
        throw new Exception("Geef een waarde aan Blyat");
    }
    if (!is_numeric($boomer)){
        throw new Exception("Ja boi, t moet wel geldig blijven...");
    }
    if ($boomer < 0){
        throw new Exception("Oi ga weg met al je negativiteit hiero");
    }
} catch(Exception $exception) {
    echo "Error: ". $exception -> getMessage();
    exit();
}

$boomer = Euro ($boi, $boomer);
$smolMilkshake = Cent ($gorl, $smolMilkshake);