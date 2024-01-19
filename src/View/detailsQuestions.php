<?php $title = $enigmes['question']; ?>

<?php ob_start(); ?>

<div class="container">
    <div class="card">
        <h3><?= $enigmes['question']; ?></h3>

        <?php if (isset($success)) { ?>
            <p class="message success"><?= $success; ?></p>
        <?php } elseif (isset($error)) { ?>
            <p class="message error"><?= $error; ?></p>
        <?php } ?>

            <form method="POST" action="">
                <input type="text" name="reponse_user" placeholder="Votre réponse" />
                <input type="submit" name="submit" value="Répondre" />
            </form>
    </div>
</div>

<?php $content = ob_get_clean(); ?>


<?php require('./src/View/layout.php'); ?>