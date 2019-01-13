<?php

class UsersController {

  protected $query;

  public function __construct()
  {
    $this->query = new QueryBuilder();
  }

  public function create()
  {
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) {
        $error =  'All fields are required for submition';
        session_start();
        $_SESSION['error'] = $error;
        header('Location: /');
        exit();
    }

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $user = new User();
    $user->setName($_POST['name']);
    $user->setEmail($_POST['email']);
    $user->setPassword($password);

    $user->save();

    header('Location: /');
  }


  public function attributes()
  {
    session_start();

    $user = $this->query->selectUser($_SESSION['userEmail']);

    $attrData = [
      'attributesname' => $_POST['attributes-name'],
      'attributesvalue' => $_POST['attributes-value'],
      'userId' => $user->getId()
    ];

    $this->query->addAttributes($attrData);

    header('Location: /welcome');
  }
}
