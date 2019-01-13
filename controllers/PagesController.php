<?php

class PagesController {

  protected $query;

  public function __construct()
  {
    $this->query = new QueryBuilder();
  }

  public function home()
  {
    session_start();
    if (isset($_SESSION['error'])) {
      $error = $_SESSION['error'];
      $_SESSION['error'] = '';
    } else {
      $error = '';
    }

    return view('index', [
      'error' => $error
    ]);
  }

  public function welcome()
  {
    session_start();
    $user = $this->query->selectUser($_SESSION['userEmail']);

    if(!$user) {
      header("Location: /");
    }

    $attributes= $this->query->getAttributes($user->getId());

    return view('welcome', [
      'user' => $user,
      'attributes' => $attributes
    ]);
  }
}
