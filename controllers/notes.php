<?php

$config = require('./config.php');

$db = new Database($config['database']);

$heading = "My notes";

$sql = "SELECT * from notes";

$notes = $db->query($sql)->get();

require 'views/notes.view.php';