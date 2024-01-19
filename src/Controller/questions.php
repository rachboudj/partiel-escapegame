<?php 

require_once './src/Model/enigme.php';


function questions() {
    $pdo = (new Database())->getPdo();
    $model = new Enigme($pdo);

    $enigmes = $model->showEnigme();

    foreach ($enigmes as $key => $enigme) {
        $enigmes[$key]['taux_reussite'] = $model->getTauxReussite($enigme['id_question']);
    }

    require('./src/View/questions.php');
}

function detailsQuestions()
{
    $pdo = (new Database())->getPdo();
    $model = new Enigme($pdo);

    if (!empty($_GET['enigmeId']) && ctype_digit($_GET['enigmeId'])) {
        $id = $_GET['enigmeId'];
        $enigmes = $model->getDetailsEnigme($id);
        $tauxReussite = $model->getTauxReussite($id);

        if (!empty($_POST['submit'])) {
            $reponse_user = strtolower(trim($_POST['reponse_user']));
            $reponse_attendue = strtolower($enigmes['reponse']);
            $isCorrect = strpos($reponse_user, $reponse_attendue) !== false;

            $model->addReponse($id, $reponse_user, $isCorrect);

            if ($isCorrect) {
                $success = "Bravo ! Votre réponse est correcte.";
            } else {
                $error = "Dommage, ce n'est pas la bonne réponse. Essayez encore.";
            }
        }
    }


    require './src/View/detailsQuestions.php';
}