<?php 

require_once './src/Model/enigme.php';


function questions() {
    $pdo = (new Database())->getPdo();
    $model = new Enigme($pdo);

    $enigmes = $model->showEnigme();


    require('./src/View/questions.php');
}