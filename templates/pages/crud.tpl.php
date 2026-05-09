<?php
    // Adatbázis kapcsolat létrehozása a listázáshoz
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=vuj237_web1', 'vuj237_web1', 'Web_I_adatbazis_vuj237',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        $sql = "SELECT id, csaladi_nev, uto_nev, bejelentkezes FROM felhasznalok";
        $sth = $dbh->query($sql);
        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Hiba: " . $e->getMessage();
    }
?>

<h3>Felhasználók adminisztrációja (CRUD)</h3>

<table style="width:100%; border-collapse: collapse; margin-top: 20px;">
    <thead>
        <tr style="background-color: #FFD700; text-align: left;">
            <th style="padding: 10px; border: 1px solid #ddd;">ID</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Név</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Felhasználónév</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Műveletek</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rows as $row) { ?>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd;"><?= $row['id'] ?></td>
            <td style="padding: 10px; border: 1px solid #ddd;"><?= $row['csaladi_nev'] . " " . $row['uto_nev'] ?></td>
            <td style="padding: 10px; border: 1px solid #ddd;"><?= $row['bejelentkezes'] ?></td>
            <td style="padding: 10px; border: 1px solid #ddd;">
    <a href="index.php?oldal=crud_modosit&id=<?= $row['id'] ?>">Módosítás</a> | 
    <a href="index.php?oldal=crud_torol&id=<?= $row['id'] ?>" onclick="return confirm('Biztosan törli?')">Törlés</a>
</td>

            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>