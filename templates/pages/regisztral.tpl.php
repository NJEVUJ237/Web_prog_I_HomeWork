<div style="text-align: center; margin-top: 50px;">
    <h2>Regisztráció</h2>
    
    <?php 
    // Kiolvassuk az üzenetet a session-ből, majd töröljük, hogy ne maradjon ott
    $uzenet = isset($_SESSION['reg_uzenet']) ? $_SESSION['reg_uzenet'] : "";
    $ujra = isset($_SESSION['reg_ujra']) ? $_SESSION['reg_ujra'] : false;
    unset($_SESSION['reg_uzenet']);
    unset($_SESSION['reg_ujra']);
    ?>

    <?php if($uzenet != "") : ?>
        <p style="color: <?= ($ujra) ? 'red' : 'green' ?>; font-weight: bold; font-size: 1.2em;">
            <?= $uzenet ?>
        </p>
    <?php endif; ?>

    <?php if($ujra) : ?>
        <a href="index.php?oldal=belepes" style="display: inline-block; padding: 10px 20px; background-color: #FF6600; color: white; text-decoration: none; border-radius: 5px;">Vissza</a>
    <?php else : ?>
        <a href="index.php?oldal=/" style="display: inline-block; padding: 10px 20px; background-color: #003366; color: white; text-decoration: none; border-radius: 5px;">Főoldal</a>
    <?php endif; ?>
</div>