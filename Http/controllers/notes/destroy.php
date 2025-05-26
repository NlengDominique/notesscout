<?php



use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUser = 1;

$sql = "SELECT * FROM notes WHERE id = :id";

$note = $db->query($sql, [
    'id' => $_POST['id'],
])->findOrFail();

authorize($note->user_id === $currentUser);

$sql = "DELETE FROM notes WHERE id = :id";

$db->query($sql, ['id' => $_GET['id']]);

header("location:/notes");

exit();
