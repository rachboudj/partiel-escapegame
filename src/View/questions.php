<?php $title = "Listes des questions" ?>

<?php ob_start(); ?>
<h1>Les questions de nos utilisateurs</h1>

<div class="container">
        <?php foreach ($enigmes as $enigme) { ?>
    <div class="card">
            <h3><?= $enigme['question']; ?></h3>
            <p>Taux de réussite : <?= round($enigme['taux_reussite'], 2); ?>%</p>
            <button><a href="index.php?page=detailsQuestions&enigmeId=<?= $enigme['id_question']; ?>">Voir l'énigme</a></button>
    </div>
        <?php } ?>
</div>

<?php $content = ob_get_clean(); ?>


<?php require('./src/View/layout.php'); ?>
