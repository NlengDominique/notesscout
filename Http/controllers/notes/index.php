<?php


use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$sql = "SELECT * from notes";

$notes = $db->query($sql)->get();

view('notes/index.view.php',[
    
    'heading' => 'My notes',
    'notes' => $notes
]);
