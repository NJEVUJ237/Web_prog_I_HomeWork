<div style="text-align: center; margin-top: 50px;">
    <h2>Kapcsolatfelvétel állapota</h2>
    <p style="font-size: 1.2em; color: <?= (isset($sikeres) && $sikeres) ? 'green' : 'red' ?>;">
        <?= $uzenet ?? "Érvénytelen kérés!" ?>
    </p>
    <a href="kapcsolat" style="text-decoration: none; color: #0d6efd;">Vissza az űrlaphoz</a>
</div>