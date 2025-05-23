<?php

$config = require base_path('config.php');

$db = new Database($config['database']);


$sql = "SELECT * from notes";

$notes = $db->query($sql)->get();

view('notes/index.view.php',[
    
    'heading' => 'My notes',
    'notes' => $notes
]);
