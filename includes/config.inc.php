<?php
$ablakcim = array(
    'cim' => 'Magyar Filmarchívum',
);

$fejlec = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'logo',
    'cim' => 'Magyar Filmarchívum',
    'motto' => 'Klasszikusok digitálisan'
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Magyar Filmarchívum Kft.'
);

$oldalak = array(
    '/' => array('fajl' => 'cimlap', 'szoveg' => 'Főoldal', 'menun' => array(1,1)),
    'kepek' => array('fajl' => 'kepek', 'szoveg' => 'Képek', 'menun' => array(1,1)),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
    
    // Feldolgozó és logikai oldalak (nem jelennek meg a menüben: 0,0)
    'kapcsolat_ellenorzes' => array('fajl' => 'kapcsolat_ellenorzes', 'szoveg' => '', 'menun' => array(0,0)),
    'kepfeltoltes' => array('fajl' => 'kepfeltoltes', 'szoveg' => '', 'menun' => array(0,0)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0)),
    'crud_modosit' => array('fajl' => 'crud_modosit', 'szoveg' => '', 'menun' => array(0,0)),
    'crud_torol' => array('fajl' => 'crud_torol', 'szoveg' => '', 'menun' => array(0,0)),
    'crud_mentes' => array('fajl' => 'crud_mentes', 'szoveg' => '', 'menun' => array(0,0)),

    // Csak bejelentkezett felhasználóknak (0,1)
    'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Üzenetek', 'menun' => array(0,1)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    
    // Publikus vagy speciális menüpontok
    'crud' => array('fajl' => 'crud', 'szoveg' => 'CRUD', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Bejelentkezés', 'menun' => array(1,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>