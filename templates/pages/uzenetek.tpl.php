<h3>Beérkezett üzenetek</h3>

<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=vuj237_web1', 'vuj237_web1', 'Web_I_adatbazis_vuj237',
                    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
    
    // Lekérdezés fordított időrendben
    $sql = "SELECT * FROM uzenetek ORDER BY datum DESC";
    $sth = $dbh->query($sql);
    $uzenetek = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Hiba: " . $e->getMessage();
}
?>

<?php if(empty($uzenetek)): ?>
    <p>Még nem érkezett üzenet.</p>
<?php else: ?>
    <?php foreach($uzenetek as $u): ?>
        <div style="border: 1px solid #ddd; margin-bottom: 10px; padding: 10px; border-radius: 5px; background: #fff;">
            <strong>Küldte:</strong> <?= htmlspecialchars($u['nev']) ?> (<?= htmlspecialchars($u['email']) ?>)<br>
            <strong>Időpont:</strong> <?= $u['datum'] ?><br>
            <p style="margin-top: 10px; font-style: italic;">"<?= htmlspecialchars($u['szoveg']) ?>"</p>
        </div>
    <?php endforeach; ?>
<?php endif; ?>