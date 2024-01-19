<?php $title = "Listes des questions" ?>

<?php ob_start(); ?>
<div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Les questions de nos utilisateurs</h2>
</div>

<div class="flex min-h-full flex-col place-content-evenly px-6 py-12 lg:px-8">
        <?php foreach ($enigmes as $enigme) { ?>
                <ul role="list" class="divide-y divide-gray-100">
                        <li class="flex justify-between gap-x-6 py-5">
                                <div class="flex min-w-0 gap-x-4">
                                        <div class="min-w-0 flex-auto">
                                                <p class="text-m font-semibold leading-6 text-gray-900"><?= $enigme['question']; ?></p>
                                                <div class="mt-5">
                                                        <a href="index.php?page=detailsQuestions&enigmeId=<?= $enigme['id_question']; ?>" class="rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Voir l'énigme</a>
                                                        <a href="index.php?page=supprEnigme&enigmeId=<?= $enigme['id_question']; ?>" class="rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Supprimer l'énigme</a>
                                                </div>
                                        </div>
                                </div>
                                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                        <p class="text-sm leading-6 text-gray-900">Taux de réussite : <?= round($enigme['taux_reussite'], 2); ?>%</p>
                                </div>
                        </li>
                        <hr>
                </ul>

        <?php } ?>
</div>



<?php $content = ob_get_clean(); ?>


<?php require('./src/View/layout.php'); ?>