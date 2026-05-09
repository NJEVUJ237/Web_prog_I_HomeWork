<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <title><?= $ablakcim['cim'] ?></title>
    <link rel="stylesheet" href="./styles/stilus.css" type="text/css">
</head>
<body>
    <header>
        <img src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">
        <h1><?= $fejlec['cim'] ?></h1>
        <?php if(isset($_SESSION['login'])) { ?>
            <p>Bejelentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un'] ?></strong></p>
        <?php } ?>
    </header>

    <div id="wrapper">
        <nav>
            <ul>
                <?php foreach ($oldalak as $url => $oldal) { ?>
                    <?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
                        <li>
                            <a href="<?= ($url == '/') ? '.' : './'.$url ?>">
                                <?= $oldal['szoveg'] ?>
                            </a>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </nav>

        <main id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
        </main>
    </div>

    <footer style="text-align: center; padding: 20px; color: #666; font-size: 0.9em; max-width: 1200px; margin: 10px auto; border-top: 1px solid #ddd;">
    <p>&copy; <?= date("Y") ?> - <?= $lablec['ceg'] ?></p>
    <p style="margin-top: 5px;">
        Készítette: <strong>Borsos Gábor</strong> (VUJ237) & <strong>Csiba Szabina</strong> (ZZJ9GQ)
    </p>
</footer>

</body>
</html>