<?php


use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUser = 1;

$sql = "SELECT * FROM notes WHERE id = :id";

$note = $db->query($sql, [
    'id' => $_POST['id'],
])->findOrFail();


authorize($note->user_id === $currentUser);


$errors = [];

$body = $_POST['body'];


if (!Validator::string($body, 1, 160)) {

    $errors['body'] = 'A body of no more than 160 characters is required ';
}

if (!empty($errors)) {

  return view('notes/edit.view.php', [

    'heading' => 'Update a note',
    'errors' => [],
    'note' => $note,
]);
}

$sql = "UPDATE notes SET body = :body WHERE id = :id";

$db->query($sql, ['body' => $body, 'id' => $_POST['id']]);

header("location: /notes");

exit();
    
