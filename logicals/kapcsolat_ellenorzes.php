<?php
if (isset($_POST['nev']) && isset($_POST['email']) && isset($_POST['szoveg'])) {
    // Szerveroldali ellenőrzés
    if (strlen($_POST['nev']) < 3 || strpos($_POST['email'], '@') === false || empty(trim($_POST['szoveg']))) {
        $uzenet = "Hiba: Hiányos vagy hibás adatok!";
        $sikeres = false;
    } else {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=vuj237_web1', 'vuj237_web1', 'Web_I_adatbazis_vuj237',
                            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

            $sqlInsert = "INSERT INTO uzenetek(nev, email, szoveg, datum) VALUES(:nev, :email, :szoveg, :datum)";
            $stmt = $dbh->prepare($sqlInsert);
            $stmt->execute(array(
                ':nev' => $_POST['nev'],
                ':email' => $_POST['email'],
                ':szoveg' => $_POST['szoveg'],
                ':datum' => date("Y-m-d H:i:s")
            ));
            $uzenet = "Köszönjük! Az üzenetét rögzítettük az adatbázisban.";
            $sikeres = true;
        } catch (PDOException $e) {
            $uzenet = "Hiba az adatbázis mentés során: " . $e->getMessage();
            $sikeres = false;
        }
    }
}
?>