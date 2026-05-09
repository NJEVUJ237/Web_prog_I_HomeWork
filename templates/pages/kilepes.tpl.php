<div style="text-align: center; margin-top: 50px;">
    <h1>Sikeresen kijelentkezett!</h1>
    <?php if(isset($data['login'])) { ?>
        <p>Viszontlátásra, <strong><?= $data['csn']." ".$data['un']." (".$data['login'].")" ?></strong>!</p>
    <?php } ?>
    <a href="." style="color: blue;">Vissza a főoldalra</a>
</div>