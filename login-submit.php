<?php

require 'bootstrap.php';

if(empty($_POST['email']) || empty($_POST['password'])) {
    echo 'All fields are required for submition';
    die();
}

$query->login();
session_start();
session_regenerate_id();
$user = $query->selectUser($_POST['email']);

if(!$user) {
  echo 'User not found!';
  die();
}

$_SESSION["user"] = $user;

header('Location: views/welcome.view.php');


















































//
