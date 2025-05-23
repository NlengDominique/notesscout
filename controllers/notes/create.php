<?php

$config = require base_path('config.php');

require base_path('Validator.php');

$db = new Database($config['database']);

$body = $_POST['body'];


if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $errors = [];

    if(!Validator::string($body,1,160)){

        $errors['body'] = 'A body of no more than 160 characters is required ';
    }
    
    if(empty($errors)){

    $sql = "INSERT INTO notes(body,user_id) VALUES(:body,:user_id)";

    $db->query($sql,['body' => $body , 'user_id' => 1]);
    
    }

}

view('notes/create.view.php',[
    'heading' => 'Create a note',
    'errors' => $errors
]);