<?php
if (isset($_POST['felhasznalo']) && isset($_POST['jelszo'])) {
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=vuj237_web1', 'vuj237_web1', 'Web_I_adatbazis_vuj237',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        $sqlSelect = "SELECT id FROM felhasznalok WHERE bejelentkezes = :bejelentkezes";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo']));
        
        if($sth->fetch()) {
            $_SESSION['reg_uzenet'] = "A felhasználói név már foglalt!";
            $_SESSION['reg_ujra'] = true;
        }
        else {
            $sqlInsert = "INSERT INTO felhasznalok (csaladi_nev, uto_nev, bejelentkezes, jelszo) 
                          VALUES (:szn, :un, :login, :jelszo)";
            $stmt = $dbh->prepare($sqlInsert); 
            $stmt->execute(array(
                ':szn' => $_POST['vezeteknev'],
                ':un' => $_POST['utonev'],
                ':login' => $_POST['felhasznalo'],
                ':jelszo' => sha1($_POST['jelszo'])
            ));
            
            $_SESSION['reg_uzenet'] = "Sikeres regisztráció!";
            $_SESSION['reg_ujra'] = false;
            
            // Beléptetés
            $_SESSION['login'] = $_POST['felhasznalo'];
            $_SESSION['csn'] = $_POST['vezeteknev'];
            $_SESSION['un'] = $_POST['utonev'];
        }
        
        // KRITIKUS: Átirányítás, hogy ne lehessen újra beküldeni a formot frissítéssel
        header("Location: index.php?oldal=regisztral");
        exit;
        
    } catch (PDOException $e) {
        die("Hiba történt: " . $e->getMessage());
    }      
}
?>