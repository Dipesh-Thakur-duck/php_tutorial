<?php

use Core\App;
use Core\Database;
use Core\Validator;
$db = App::resolve(Database::class);
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$errors = [];
if(!Validator::email($email)){
  $errors['email'] = 'Please provide a valid email address';
}
if(!Validator::string($password, 7, 255)){
  $errors['password'] = 'Password must be at least 7 characters';
}
if(! empty($errors)){
  return view('registration/create.view.php', ['errors' => $errors]);
}

$user = $db->query('select * from users_1 where email = :email', [
  'email' => $email
])->find();

if($user){
  header('Location: /');
  exit();
}else{
  $db->query('insert into users_1 (email, password) values (:email, :password)', [
    'email' => $email,
    'password' => password_hash($password, PASSWORD_BCRYPT),
  ]);
  login([
  'email' => $email,
  ]);

  header('Location: /');
  exit();
}