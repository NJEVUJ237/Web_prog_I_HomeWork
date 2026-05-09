<h3>Lépjen kapcsolatba velünk!</h3>
<form action="kapcsolat_ellenorzes" method="post" id="kapcsolat_form">
    <div style="margin-bottom: 15px;">
        <label for="nev">Név:</label><br>
        <input type="text" name="nev" id="nev" style="width: 100%; max-width: 400px; padding: 5px;">
    </div>
    <div style="margin-bottom: 15px;">
        <label for="email">E-mail:</label><br>
        <input type="text" name="email" id="email" style="width: 100%; max-width: 400px; padding: 5px;">
    </div>
    <div style="margin-bottom: 15px;">
        <label for="szoveg">Üzenet:</label><br>
        <textarea name="szoveg" id="szoveg" rows="5" style="width: 100%; max-width: 400px; padding: 5px;"></textarea>
    </div>
    <button type="submit" style="padding: 10px 20px; background-color: #333; color: white; border: none; border-radius: 5px; cursor: pointer;">Küldés</button>
</form>

<div id="js_hiba" style="color: red; margin-top: 10px; font-weight: bold;"></div>

<script>
document.getElementById('kapcsolat_form').onsubmit = function() {
    let nev = document.getElementById('nev').value;
    let email = document.getElementById('email').value;
    let szoveg = document.getElementById('szoveg').value;
    let hibaBox = document.getElementById('js_hiba');
    let hiba = "";

    if (nev.trim().length < 3) hiba += "A név túl rövid! <br>";
    if (email.indexOf('@') === -1 || email.indexOf('.') === -1) hiba += "Érvénytelen e-mail cím! <br>";
    if (szoveg.trim() === "") hiba += "Az üzenet nem lehet üres! <br>";

    if (hiba !== "") {
        hibaBox.innerHTML = hiba;
        return false;
    }
    return true;
};
</script>