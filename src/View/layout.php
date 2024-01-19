<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="./assets/css/style.css" rel="stylesheet" />
    </head>

    <body>
        <header>
            <div class="logo">Eniiiigme</div>
            <nav>
                <ul>
                    <li><a href="index.php?page=accueil">Accueil</a></li>
                    <li><a href="index.php?page=questions">Toutes les questions</a></li>
                    <li><a href="#">Gestion</a></li>
                </ul>
            </nav>
        </header>
        <?= $content ?>
    </body>
</html>