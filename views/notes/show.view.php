 <?php require base_path('views/partials/head.php') ?>
 <?php require base_path('views/partials/nav.php') ?>
 <?php require base_path('views/partials/banner.php') ?>
 <main>
     <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

         <a href="/notes" class="text-xl text-blue-500 underline"> Go back home</a>

         <p class="text-2xl mt-6"><?= $note->body ?> writing by <?= $note->user_id ?></p>


<!--         <form action="" method="post" class="mt-6">-->
<!--            <input type="hidden" name="_method" value="DELETE">-->
<!--            <input type="hidden" name="id" value="--><?php //= $note->id ?><!--">-->
<!--            <button type="submit" class=" hover:bg-gray-700 bg-red-500 p-2 text-white rounded-md w-[100px]">Delete</button>-->
<!--         </form>-->

         <footer class="mt-6">

             <a href="/note/edit?id=<?= $note->id ?>" class="hover:bg-gray-700 bg-green-500 p-3 text-white rounded-md w-[100px]">Edit</a>

         </footer>
     </div>
 </main>

 <?php require base_path('views/partials/footer.php') ?>