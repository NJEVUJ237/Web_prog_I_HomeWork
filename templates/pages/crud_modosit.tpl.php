<?php
// Adatok betöltése az űrlapba
try {
    // HASZNÁLD A MŰKÖDŐ JELSZAVADAT!
    $dbh = new PDO('mysql:host=localhost;dbname=vuj237_web1', 'vuj237_web1', 'Web_I_adatbazis_vuj237',
                    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
    
    // Lekérjük a konkrét felhasználót az ID alapján
    $stmt = $dbh->prepare("SELECT * FROM felhasznalok WHERE id = :id");
    $stmt->execute(array(':id' => $_GET['id']));
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$user) {
        die("Hiba: Nem található felhasználó ezzel az azonosítóval!");
    }
} catch (PDOException $e) { 
    die("Adatbázis hiba a betöltésnél: " . $e->getMessage()); 
}
?>

<div style="padding: 20px;">
    <h3>Felhasználó adatainak módosítása</h3>
    <form action="index.php?oldal=crud_mentes" method="post" style="background: #f9f9f9; padding: 20px; border-radius: 8px; border: 1px solid #ddd; max-width: 400px;">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        
        <div style="margin-bottom: 10px;">
            <label>Vezetéknév:</label><br>
            <input type="text" name="csn" value="<?= $user['csaladi_nev'] ?>" style="width: 100%; padding: 5px;" required>
        </div>
        
        <div style="margin-bottom: 10px;">
            <label>Utónév:</label><br>
            <input type="text" name="un" value="<?= $user['uto_nev'] ?>" style="width: 100%; padding: 5px;" required>
        </div>
        
        <div style="margin-bottom: 15px;">
            <label>Felhasználónév:</label><br>
            <input type="text" name="login" value="<?= $user['bejelentkezes'] ?>" style="width: 100%; padding: 5px;" required>
        </div>
        
        <button type="submit" style="background: #003366; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer;">
            Módosítások mentése
        </button>
        <a href="index.php?oldal=crud" style="margin-left: 10px; color: #666; text-decoration: none;">Mégse</a>
    </form>
</div>