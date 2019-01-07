<?php

require 'bootstrap.php';


$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$data = [
'name' => $_POST['name'],
'email' => $_POST['email'],
'password' => $password
];


$query->signUp($data);

header('Location: /index.php');





































//
