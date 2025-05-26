<?php

use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];

$body = $_POST['body'];

if (!Validator::string($body, 1, 160)) {

    $errors['body'] = 'A body of no more than 160 characters is required ';
}

if (!empty($errors)) {

    return view('notes/create.view.php', [

        'heading' => 'Create a note',
        'errors' => $errors
    ]);
}

$sql = "INSERT INTO notes(body,user_id) VALUES(:body,:user_id)";

$db->query($sql, ['body' => $body, 'user_id' => 1]);

header("location: /notes");

exit();
