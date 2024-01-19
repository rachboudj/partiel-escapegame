<?php

class Enigme
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function addEnigme($question, $reponse)
    {
        $requete = "INSERT INTO questions(question, reponse) VALUES (:question, :reponse)";
        $query = $this->pdo->prepare($requete);
        $query->bindValue(':question', $question, PDO::PARAM_STR);
        $query->bindValue(':reponse', $reponse, PDO::PARAM_STR);
        $query->execute();
        return $this->pdo->lastInsertId();
    }

    function deleteEnigme($id)
    {
        $requeteReponses = "DELETE FROM reponses WHERE id_question = :id_question";
        $queryReponses = $this->pdo->prepare($requeteReponses);
        $queryReponses->bindValue(':id_question', $id, PDO::PARAM_INT);
        $queryReponses->execute();

        $requete = "DELETE FROM questions WHERE id_question = :id_question";
        $query = $this->pdo->prepare($requete);
        $query->bindValue(':id_question', $id, PDO::PARAM_INT);
        $query->execute();
    }

    public function showEnigme()
    {
        $requete = "SELECT * FROM questions";
        $query = $this->pdo->prepare($requete);
        $query->execute();
        return $query->fetchAll();
    }

    public function getDetailsEnigme($id)
    {
        $requete = "SELECT * FROM questions WHERE id_question = :id_question";
        $query = $this->pdo->prepare($requete);
        $query->bindValue(':id_question', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function addReponse($idQuestion, $reponseUser, $isCorrect)
    {
        $requete = "INSERT INTO reponses (id_question, reponse_user, isTrue) VALUES (:id_question, :reponse_user, :isTrue)";
        $query = $this->pdo->prepare($requete);
        $query->bindValue(':id_question', $idQuestion, PDO::PARAM_INT);
        $query->bindValue(':reponse_user', $reponseUser, PDO::PARAM_STR);
        $query->bindValue(':isTrue', $isCorrect, PDO::PARAM_BOOL);
        $query->execute();
    }

    public function getTauxReussite($id)
    {
        $requeteTotal = "SELECT COUNT(*) FROM reponses WHERE id_question = :id_question";
        $queryTotal = $this->pdo->prepare($requeteTotal);
        $queryTotal->bindValue(':id_question', $id, PDO::PARAM_INT);
        $queryTotal->execute();
        $totalReponses = $queryTotal->fetchColumn();

        $requeteCorrectes = "SELECT COUNT(*) FROM reponses WHERE id_question = :id_question AND isTrue = 1";
        $queryCorrectes = $this->pdo->prepare($requeteCorrectes);
        $queryCorrectes->bindValue(':id_question', $id, PDO::PARAM_INT);
        $queryCorrectes->execute();
        $reponsesCorrectes = $queryCorrectes->fetchColumn();

        if ($totalReponses > 0) {
            return ($reponsesCorrectes / $totalReponses) * 100;
        } else {
            return 0;
        }
    }
}
