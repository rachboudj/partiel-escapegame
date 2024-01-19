<?php

class Enigme {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function addEnigme($question, $reponse) {
        $requete = "INSERT INTO questions(question, reponse) VALUES (:question, :reponse)";
        $query = $this->pdo->prepare($requete);
        $query->bindValue(':question', $question, PDO::PARAM_STR);
        $query->bindValue(':reponse', $reponse, PDO::PARAM_STR);
        $query->execute();
        return $this->pdo->lastInsertId();
    }

    public function showEnigme() {
        $requete = "SELECT * FROM questions";
        $query = $this->pdo->prepare($requete);
        $query->execute();
        return $query->fetchAll();
    }

    public function getDetailsEnigme($id) {
        $requete = "SELECT * FROM questions WHERE id_question = :id_question";
        $query = $this->pdo->prepare($requete);
        $query->bindValue(':id_question', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}