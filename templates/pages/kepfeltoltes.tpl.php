<div style="text-align: center; margin-top: 50px;">
    <h2>Fájlfeltöltés eredménye</h2>
    <?php foreach($uzenet as $sor) { ?>
        <p style="color: <?= ($sikeres) ? 'green' : 'red' ?>;"><?= $sor ?></p>
    <?php } ?>
    <a href="kepek" style="color: blue;">Vissza a galériához</a>
</div>