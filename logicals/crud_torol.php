<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    try {
        // Itt használd a valódi jelszavadat!
        $dbh = new PDO('mysql:host=localhost;dbname=vuj237_web1', 'vuj237_web1', 'Web_I_adatbazis_vuj237',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        
        $stmt = $dbh->prepare("DELETE FROM felhasznalok WHERE id = :id");
        $stmt->execute(array(':id' => $id));
        
        header("Location: index.php?oldal=crud");
        exit;
    } catch (PDOException $e) {
        die("Adatbázis hiba: " . $e->getMessage());
    }
}
?>