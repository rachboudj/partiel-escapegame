<?php $title = "Listes des questions" ?>

<?php ob_start(); ?>
<h1>Les questions de nos utilisateurs</h1>

<?php $content = ob_get_clean(); ?>


<?php require('./src/View/layout.php'); ?>
