<?php
if(isset($_POST['felhasznalo']) && isset($_POST['jelszo'])) {
    try {
        // Kapcsolódás - ÍRD ÁT A SAJÁT ADATAIDRA!
        $dbh = new PDO('mysql:host=localhost;dbname=vuj237_web1', 'vuj237_web1', 'Web_I_adatbazis_vuj237',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // Felhasználó keresése az adatbázisban
        $sqlSelect = "SELECT id, csaladi_nev, uto_nev FROM felhasznalok WHERE bejelentkezes = :bejelentkezes AND jelszo = sha1(:jelszo)";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => $_POST['jelszo']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        
        if($row) {
            // Ha van találat, elmentjük a munkamenetbe (Session)
            $_SESSION['csn'] = $row['csaladi_nev']; 
            $_SESSION['un'] = $row['uto_nev']; 
            $_SESSION['login'] = $_POST['felhasznalo'];
        }
    }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }      
}
?>