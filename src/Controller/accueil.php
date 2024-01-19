<?php

require_once './src/Model/enigme.php';
require_once './src/utils/functions.php';

function accueil() {
    $errors = array();

    $pdo = (new Database())->getPdo();
    $model = new Enigme($pdo);

    if (!empty($_POST['submit'])) {
        $question = trim(strip_tags($_POST['question']));
        $reponse = trim(strip_tags($_POST['reponse']));

        $errors = validationTexte($errors, $question, 'question', 3, 100);
        $errors = validationTexte($errors, $reponse, 'reponse', 1, 100);
    
        if (count($errors) === 0) {
            $idEnigme = $model->addEnigme($question, $reponse);
            $success = "Votre énigme a bien été enregistré !";
            $link = "index.php?page=detailsQuestions&enigmeId=" . $idEnigme;
        } else {
            $success = "";
            $errorMessage = "Votre énigme n'a pas été enregistré... !";
        }
    }


    require('./src/View/accueil.php');
}