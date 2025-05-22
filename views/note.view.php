    <?php include __DIR__ . '/partials/head.php' ?>
    <?php include __DIR__ . '/partials/nav.php' ?>
    <?php include __DIR__ . '/partials/banner.php' ?>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

            <a href="/notes" class="text-xl text-blue-500 underline"> Go back home</a>
            
            <p class="text-2xl mt-6"><?= $note->body ?> writing by <?= $note->user_id ?></p>
            

        </div>
    </main>

    <?php include __DIR__ . '/partials/footer.php' ?>