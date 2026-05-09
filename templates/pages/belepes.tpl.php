<div style="display: flex; flex-wrap: wrap; gap: 40px; justify-content: center; margin-top: 20px;">
    
    <section style="flex: 1; min-width: 300px; padding: 20px; background-color: #f4f4f4; border-radius: 10px; border: 1px solid #ddd;">
        <h2 style="border-bottom: 2px solid #FFD700; padding-bottom: 10px;">Bejelentkezés</h2>
        <form action="index.php?oldal=belep" method="post">
            <div style="margin-bottom: 15px;">
                <label>Felhasználónév:</label><br>
                <input type="text" name="felhasznalo" style="width: 90%; padding: 8px;" required>
            </div>
            <div style="margin-bottom: 15px;">
                <label>Jelszó:</label><br>
                <input type="password" name="jelszo" style="width: 90%; padding: 8px;" required>
            </div>
            <button type="submit" style="padding: 10px 20px; background-color: #333; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Belépés
            </button>
        </form>
    </section>

    <section style="flex: 1; min-width: 300px; padding: 20px; background-color: #f4f4f4; border-radius: 10px; border: 1px solid #ddd;">
        <h2 style="border-bottom: 2px solid #FF6600; padding-bottom: 10px;">Regisztráció</h2>
        <form action="index.php?oldal=regisztral" method="post">
            <div style="margin-bottom: 10px;">
                <label>Vezetéknév:</label><br>
                <input type="text" name="vezeteknev" style="width: 90%; padding: 8px;" required>
            </div>
            <div style="margin-bottom: 10px;">
                <label>Utónév:</label><br>
                <input type="text" name="utonev" style="width: 90%; padding: 8px;" required>
            </div>
            <div style="margin-bottom: 10px;">
                <label>Felhasználónév:</label><br>
                <input type="text" name="felhasznalo" style="width: 90%; padding: 8px;" required>
            </div>
            <div style="margin-bottom: 10px;">
                <label>Jelszó:</label><br>
                <input type="password" name="jelszo" style="width: 90%; padding: 8px;" required>
            </div>
            <button type="submit" style="padding: 10px 20px; background-color: #FF6600; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Regisztráció
            </button>
        </form>
    </section>

</div>