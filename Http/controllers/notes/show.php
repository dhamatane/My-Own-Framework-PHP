<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentId = 1;

$note = $db->query('select * from notes where id = :id', [

    'id' => $_GET['id'],
])->findOrFail();

authorize($note['user_id'] === $currentId);

view('notes/show.view.php', [
    'heading' => 'Note',
    'note' => $note,
]);

exit();
