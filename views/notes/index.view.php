<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($notes as $note): ?>
                <li>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline"><?= htmlspecialchars($note['body']) ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="mt-6">
            <a href="/notes/create" class="py-2 px-5 bg-green-500 text-white font-semibold hover:bg-green-700 focus:outline-none focus:ring focus:ring-green-400 focus:ring-opacity-75">
                Create Note
            </a>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>