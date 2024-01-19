<?php

require_once "./src/Database/Database.php";

require_once "./src/Controller/accueil.php";
require_once "./src/Controller/questions.php";


if (isset($_GET['page'])) {
    if ($_GET['page'] === 'accueil') {
        accueil();
    } elseif ($_GET['page'] === 'questions') {
        questions();
    }
} else {
    accueil();
}