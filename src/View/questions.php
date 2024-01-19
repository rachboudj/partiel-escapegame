<?php $title = "Listes des questions" ?>

<?php ob_start(); ?>
<h1>Les questions de nos utilisateurs</h1>

<div class="container">
        <?php foreach ($enigmes as $enigme) { ?>
    <div class="card">
            <h3><?= $enigme['question']; ?></h3>
            <button>Voir l'énigme</button>
    </div>
        <?php } ?>
</div>

<?php $content = ob_get_clean(); ?>


<?php require('./src/View/layout.php'); ?>
