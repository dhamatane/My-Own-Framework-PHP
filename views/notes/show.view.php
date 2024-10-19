<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php')?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        
        <a href="/notes" class="text-blue-600">Go back</a>
        
        <p class="mt-6"><?= htmlspecialchars($note['body']) ?></p>
          
        <div class="flex flex-row mt-8 gap-4">

          <form class="" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="rounded-md border border-transparent bg-gray-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Delete</button>
          </form>
          
          <div class="mt-2">
            <a href="/note/edit?id=<?= $note['id'] ?>" class="cursor-pointer rounded-md border border-transparent bg-red-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Update</a>
          </div>
        </div>

        <!-- <form class="mt-6" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="py-2 px-5 bg-red-500 text-white font-semibold hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-400 focus:ring-opacity-75">
                Delete
            </button>
        </form> -->
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>