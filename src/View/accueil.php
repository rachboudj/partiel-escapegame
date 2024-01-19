<?php $title = "Accueil" ?>

<?php ob_start(); ?>
<h1>Posez votre question !</h1>


<form method="POST" action="index.php?page=accueil">
    <label for="question">Question</label>
    <input type="text" name="question" />
    <span class="error"><?php if (!empty($errors['question'])) {
                            echo $errors['question'];
                        } ?></span>

    <label for="reponse">Réponse</label>
    <input type="reponse" name="reponse" />
    <span class="error"><?php if (!empty($errors['reponse'])) {
                            echo $errors['reponse'];
                        } ?></span>

    <input class="buttons" type="submit" name="submit" value="Valider mon énigme" />
</form>


<?php if (!empty($success)) { ?>
    <p class="success-message"><?php echo $success; ?></p>
    <?php if (isset($link)) { ?>
        <p>Voici le lien de votre énigme : <a target="_blank" href="<?php echo $link; ?>">Répondre à l'énigme</a></p>
    <?php }
}

if (!empty($errorMessage)) { ?>
    <p class="error-message"><?php echo $errorMessage; ?></p>
<?php }

$content = ob_get_clean();

require('./src/View/layout.php');
