<?php $title = "Accueil" ?>

<?php ob_start(); ?>
<h1>Posez votre question !</h1>

<?php $content = ob_get_clean(); ?>


<?php require('./src/View/layout.php'); ?>
