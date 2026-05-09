<?php if(isset($_SESSION['login'])) { ?>
    <div style="text-align: center; margin-top: 50px;">
        <h1>Sikeres bejelentkezés!</h1>
        <p>Üdvözöljük, <strong><?= $_SESSION['csn']." ".$_SESSION['un'] ?></strong>!</p>
        <p>Most már elérheti a csak tagoknak fenntartott tartalmakat.</p>
        <a href="." style="color: blue;">Vissza a főoldalra</a>
    </div>
<?php } else { ?>
    <div style="text-align: center; margin-top: 50px;">
        <h1 style="color: red;">Sikertelen bejelentkezés!</h1>
        <p>Hibás felhasználónév vagy jelszó.</p>
        <a href="belepes" style="color: blue;">Próbálja újra</a>
    </div>
<?php } ?>