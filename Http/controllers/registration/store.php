<?php

use Core\App;
use Core\Database;
use Core\Validator;

extract($_POST);

$email = htmlspecialchars($email);

$password = htmlspecialchars($password);


$errors = [];

if(!Validator::email($email)){

  $errors['email'] = "Please provide a valid email adress";
}

if(!Validator::string($password,8,15)){

  $errors['password'] = "the password must have at least 8 characters";
}


if(!empty($errors)){

  return view('registration/create.view.php',[
    'errors' => $errors
  ]);
}

$db = App::resolve(Database::class);

$sql = "select * from users where email = :email";

$user = $db->query($sql,[
  'email' => $email
])->find();

if($user){

  header('location: /');
  exit();
} 
else{
  
  $sql = "insert into users(email, password) values(?,?)";

  $db->query($sql,[
    $email,password_hash($password, PASSWORD_BCRYPT)
  ]);


login($user);

header('location: /');

exit();

}

