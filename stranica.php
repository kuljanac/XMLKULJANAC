<?php
if (isset($_POST['naziv'])) {
    $naziv = strtolower($_POST['naziv']);
    $xml = simplexml_load_file('podatci.xml');
    $found = false;

    foreach ($xml->club as $club) {
        if (strtolower($club->naziv) == $naziv) {
            echo "<h2>Detalji noćnog kluba:</h2>";
            echo "Naziv: " . $club->naziv . "<br>";
            echo "Adresa: " . $club->adresa . "<br>";
            echo "Kapacitet: " . $club->kapacitet . "<br>";
            $found = true;
            break;
        }
    }

    if (!$found) {
        echo "Nocni klub s nazivom '$naziv' nije pronaden.";
    }
} else {
    echo "Molimo unesite naziv nocnog kluba.";
}
?>
