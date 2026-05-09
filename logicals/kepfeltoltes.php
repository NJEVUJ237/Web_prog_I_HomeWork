<?php
$mappa = './images/galeria/';
if (!is_dir($mappa)) mkdir($mappa, 0777, true);

$uzenet = array();

if (isset($_FILES['fajl']) && $_FILES['fajl']['error'] == 0) {
    $kiterjesztesek = array('image/jpeg', 'image/png', 'image/gif');
    if (in_array($_FILES['fajl']['type'], $kiterjesztesek)) {
        $cel = $mappa . time() . '_' . $_FILES['fajl']['name'];
        if (move_uploaded_file($_FILES['fajl']['tmp_name'], $cel)) {
            $uzenet[] = "A fájl sikeresen feltöltve: " . $_FILES['fajl']['name'];
            $sikeres = true;
        } else {
            $uzenet[] = "Hiba történt a fájl mozgatása közben!";
            $sikeres = false;
        }
    } else {
        $uzenet[] = "Nem megfelelő fájltípus! (Csak JPG, PNG, GIF)";
        $sikeres = false;
    }
}
?>