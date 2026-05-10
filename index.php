<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Naše Třída - Galerie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Seznam žáků projektu GIT</h1>
    <div class="galerie">
        <?php
            // Automaticky načte všechny .php soubory ze složky 'zaci'
            $soubory = glob("zaci/*.php");
            
            foreach ($soubory as $soubor) {
                echo "<div class='karta'>";
                include($soubor);
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>