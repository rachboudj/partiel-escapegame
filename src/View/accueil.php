<?php $title = "Accueil" ?>

<?php ob_start(); ?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Écrivez votre énigme !</h2>
    </div>

    <?php if (!empty($success)) { ?>
        <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
            <?php echo $success; ?>
        </span>

        <?php if (isset($link)) { ?>
            <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Voici le lien de votre énigme : <a class="font-semibold" target="_blank" href="<?php echo $link; ?>"><?php echo $link; ?></a></span>
        <?php }
    }

    if (!empty($errorMessage)) { ?>
        <span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10"><?php echo $errorMessage; ?></span>

    <?php } ?>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="#" method="POST">
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Énigme</label>
                <div class="mt-2">
                    <input type="text" name="question" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <span class="error"><?php if (!empty($errors['question'])) {
                                            echo $errors['question'];
                                        } ?></span>
                </div>



            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Réponse</label>
                </div>
                <div class="mt-2">
                    <input type="reponse" name="reponse" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <span class="error"><?php if (!empty($errors['reponse'])) {
                                            echo $errors['reponse'];
                                        } ?></span>
                </div>
            </div>

            <div>
                <input type="submit" name="submit" value="Valider mon énigme" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            </div>
        </form>
    </div>
</div>


<?php

$content = ob_get_clean();

require('./src/View/layout.php');
