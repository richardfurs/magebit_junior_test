<?php

class AuthController {

  protected $query;

  public function __construct()
  {
    $this->query = new QueryBuilder();
  }

  public function login()
  {
    if(empty($_POST['email']) || empty($_POST['password'])) {
        $error =  'All fields are required for submition';
        session_start();
        $_SESSION['error'] = $error;
        header('Location: /');
        exit();
    }

    $this->query->login();
    session_start();
    session_regenerate_id();
    $user = $this->query->selectUser($_POST['email']);

    if(!$user) {
      $error =  'User not found!';
      session_start();
      $_SESSION['error'] = $error;
      header('Location: /');
    }

    $_SESSION['userEmail'] = $user->getEmail();

    header('Location: /welcome');
  }

  public function logout()
  {
    session_start();
    session_unset();
    session_destroy();

    header('Location: /');

    exit();
  }
}
