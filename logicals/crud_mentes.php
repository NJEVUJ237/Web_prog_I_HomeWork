<?php
if(isset($_POST['id'])) {
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=vuj237_web1', 'vuj237_web1', 'Web_I_adatbazis_vuj237',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        $sql = "UPDATE felhasznalok SET csaladi_nev = :csn, uto_nev = :un, bejelentkezes = :login WHERE id = :id";
        $stmt = $dbh->prepare($sql);
        
        $stmt->execute(array(
            ':csn'   => $_POST['csn'],
            ':un'    => $_POST['un'],
            ':login' => $_POST['login'],
            ':id'    => $_POST['id']
        ));
        
        // Siker esetén azonnali átirányítás
        header("Location: index.php?oldal=crud");
        exit;
        
    } catch (PDOException $e) { 
        // Hiba esetén csak akkor írjuk ki, ha fejlesztünk, különben akadályozza az átirányítást
        $error = "Mentési hiba: " . $e->getMessage();
    }
}
?>