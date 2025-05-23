    <?php require base_path('views/partials/head.php') ?>
    <?php require base_path('views/partials/nav.php' )?>
    <?php require base_path('views/partials/banner.php') ?>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
             <ul>
                <?php foreach ($notes as $note) : ?>
                <a href="/note?id=<?= $note->id ?>" class="text-blue-500 underline">
                    <li><?= $note->body ?></li>
                </a>
                <?php endforeach ?>
            </ul>

           <p class="mt-8">

            <a href="/notes/create" class="text-blue-500 hover:bg-gray-700 bg-green-500 p-3 text-white rounded-md">
                Create note
            </a>
           </p>
        </div>
    </main>

   <?php require base_path('views/partials/footer.php') ?>