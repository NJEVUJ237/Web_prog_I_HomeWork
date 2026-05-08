<?php
    session_start();
    include('./includes/config.inc.php');

    // 1. Meghatározzuk az oldal nevét (vagy a $_GET-ből, vagy a QUERY_STRING-ből)
    $oldal_nev = isset($_GET['oldal']) ? $_GET['oldal'] : $_SERVER['QUERY_STRING'];
    if ($oldal_nev == "") $oldal_nev = "/";

    // 2. Kikeressük az oldalt a konfigurációból
    if (isset($oldalak[$oldal_nev])) {
        $keres = $oldalak[$oldal_nev];
    } else {
        $keres = $hiba_oldal;
        header("HTTP/1.0 404 Not Found");
    }

    // 3. LOGIKA: Ha van hozzá tartozó PHP fájl a logicals mappában, azt futtatjuk
    // Fontos: a $keres['fajl']-t használjuk
    $logikai_fajl = "./logicals/{$keres['fajl']}.php";
    if(file_exists($logikai_fajl)) {
        include($logikai_fajl);
    }

    // 4. MEGJELENÍTÉS: Meghívjuk a fő sablont
    // A sablonod a $keres változót várja, ezért ezt ne nevezd át!
    include('./templates/index.tpl.php'); 
?>