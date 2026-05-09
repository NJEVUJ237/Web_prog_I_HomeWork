<?php
$data = $_SESSION;
unset($_SESSION["csn"]);
unset($_SESSION["un"]);
unset($_SESSION["login"]);
// A korábbi session adatokat átadjuk a sablonnak, hogy kiírhassuk, ki lépett ki
?>