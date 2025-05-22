<?php

$config = require('./config.php');

$db = new Database($config['database']);

$heading = "Create a note";

$body = $_POST['body'] ?? '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $errors = [];

    if(strlen($body) === 0){

        $errors['body'] = 'A body is required';
    }
    if(strlen($body) > 160){

            $errors['body'] = 'the body can not be more than 160 characters';
        }
        
    if(empty($errors)){

    $sql = "INSERT INTO notes(body,user_id) VALUES(:body,:user_id)";

    $db->query($sql,['body' => $body , 'user_id' => 1]);
    }

}

require 'views/note-create.view.php';