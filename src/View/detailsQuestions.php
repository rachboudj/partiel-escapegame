<?php $title = $enigmes['question']; ?>

<?php ob_start(); ?>

<div class="container">
    <div class="card">
            <h3><?= $enigmes['question']; ?></h3>
            
    </div>
</div>

<?php $content = ob_get_clean(); ?>


<?php require('./src/View/layout.php'); ?>
