CREATE TABLE questions (
    id_question INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT NOT NULL,
    reponse TEXT NOT NULL
);

CREATE TABLE reponses (
    id_reponse INT AUTO_INCREMENT PRIMARY KEY,
    id_question INT,
    reponse_user TEXT NOT NULL,
    isTrue BOOLEAN NOT NULL,
    FOREIGN KEY (id_question) REFERENCES questions(id_question)
);