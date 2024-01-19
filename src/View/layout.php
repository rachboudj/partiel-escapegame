<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link href="./assets/css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
</head>

<body>
    <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="font-extrabold">Enigme NWS</span>
                </a>
            </div>
            <div class="lg:flex lg:gap-x-12">

                <a href="index.php?page=accueil" class="text-sm font-semibold leading-6 text-gray-900">Accueil</a>
                <a href="index.php?page=questions" class="text-sm font-semibold leading-6 text-gray-900">Toutes les énigmes</a>
            </div>
        </nav>
        
    </header>

    <?= $content ?>
</body>

</html>