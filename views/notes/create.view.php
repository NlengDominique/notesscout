     <?php require base_path('views/partials/head.php') ?>
     <?php require base_path('views/partials/nav.php' )?>
     <?php require base_path('views/partials/banner.php') ?>
     <main>
       <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
         <form action="/notes" method="post">
           <div class="space-y-12">
             <div class="border-b border-gray-900/10 pb-12">
               <div class="col-span-full">
                 <label for="body" class="block text-sm/6 font-medium text-gray-900">Body</label>
                 <div class="mt-2">
                   <textarea name="body" id="body" rows="5" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Here an idea"><?= $_POST['body'] ?? '' ?></textarea>
                 </div>

                 <?php if (isset($errors['body'])) : ?>
                   <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
                 <?php endif  ?>
               </div>
             </div>

             <div class="mt-4">
               <button type="submit" class="text-blue-500 hover:bg-gray-700 bg-blue-500 p-3 text-white rounded-md w-[100px]">Save</button>
             </div>
           </div>
       </div>
       </form>

       </div>
     </main>

     <?php require base_path('views/partials/footer.php') ?>