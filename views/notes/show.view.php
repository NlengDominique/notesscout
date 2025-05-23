 <?php require base_path('views/partials/head.php') ?>
 <?php require base_path('views/partials/nav.php') ?>
 <?php require base_path('views/partials/banner.php') ?>
 <main>
     <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

         <a href="/notes" class="text-xl text-blue-500 underline"> Go back home</a>

         <p class="text-2xl mt-6"><?= $note->body ?> writing by <?= $note->user_id ?></p>


     </div>
 </main>

 <?php require base_path('views/partials/footer.php') ?>