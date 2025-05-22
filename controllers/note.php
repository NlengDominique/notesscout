<?php


$config = require('./config.php');

$db = new Database($config['database']);

$heading = "Note";

$currentUser = 1;

$sql = "SELECT * FROM notes WHERE id = :id";

$note = $db->query($sql, [
    'id' => $_GET['id'],
])->findOrFail();

authorize($note->user_id === $currentUser);

require 'views/note.view.php';
