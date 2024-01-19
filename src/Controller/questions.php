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
    }


    require './src/View/detailsQuestions.php';
}