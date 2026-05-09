<h3>Képgaléria</h3>

<?php if(isset($_SESSION['login'])): ?>
    <div style="background: #f4f4f4; padding: 15px; border-radius: 10px; margin-bottom: 20px;">
        <h4>Új kép feltöltése</h4>
        <form action="kepfeltoltes" method="post" enctype="multipart/form-data">
            <input type="file" name="fajl" required>
            <button type="submit">Feltöltés</button>
        </form>
    </div>
<?php endif; ?>

<div style="display: flex; flex-wrap: wrap; gap: 15px;">
    <?php
    $mappa = "./images/galeria/";
    if (!is_dir($mappa)) mkdir($mappa, 0777, true);
    $kepek = glob($mappa . "*.{jpg,png,gif}", GLOB_BRACE);
    
    foreach($kepek as $kep) {
        echo '<div style="border: 2px solid #ddd; padding: 5px; border-radius: 5px;">';
        echo '<img src="'.$kep.'" style="width: 200px; height: 150px; object-fit: cover;">';
        echo '</div>';
    }
    ?>
</div>