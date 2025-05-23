<?php


$config = require base_path('config.php');

$db = new Database($config['database']);

$currentUser = 1;

$sql = "SELECT * FROM notes WHERE id = :id";

$note = $db->query($sql, [
    'id' => $_GET['id'],
])->findOrFail();

authorize($note->user_id === $currentUser);


view('notes/show.view.php',[
    'heading' => 'Note',
    'note' => $note
]);
