<?php 

require_once './src/Model/enigme.php';


function questions() {
    $pdo = (new Database())->getPdo();
    $model = new Enigme($pdo);

    $enigmes = $model->showEnigme();


    require('./src/View/questions.php');
}

function detailsQuestions()
{
    $pdo = (new Database())->getPdo();
    $model = new Enigme($pdo);

    if (!empty($_GET['enigmeId']) && ctype_digit($_GET['enigmeId'])) {
        $id = $_GET['enigmeId'];
        $enigmes = $model->getDetailsEnigme($id);

        if (!empty($_POST['submit'])) {
            $reponse_user = trim($_POST['reponse_user']);

            if ($reponse_user == $enigmes['reponse']) {
                $success = "Bravo ! Votre réponse est correcte.";
            } else {
                $error = "Dommage, ce n'est pas la bonne réponse. Essayez encore.";
            }
        }
    }


    require './src/View/detailsQuestions.php';
}