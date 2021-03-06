<?php


class QueryBuilder {

  public $pdo;

  public function __construct() {
    $this->pdo = Connection::make();
  }

  public function save($data)
  {
    $sql = $this->pdo->prepare("INSERT INTO users (email, password, name)
                                     VALUES (:email, :password, :name)");
    $sql->execute($data);
  }

  public function login()
  {
      $sql =  $this->pdo->prepare("SELECT password FROM users WHERE email = :email");
      $sql->bindParam(':email', $_POST['email']);
      $sql->execute();

      $pwd = $sql->fetchColumn();

      if(!password_verify($_POST['password'], $pwd)) {
        $error =  'Wrong email and/or password!';
        session_start();
        $_SESSION['error'] = $error;
        header('Location: /');
        exit();
      }
   }

    public function selectUser($email)
    {
      $sql =  $this->pdo->prepare("SELECT name, id, email FROM users WHERE email = :email");
      $sql->bindParam(':email', $email);
      $sql->execute();

      $user = $sql->fetchAll(PDO::FETCH_CLASS, "User");

      return reset($user);
    }

    public function addAttributes($attrData)
    {
      $sql = $this->pdo->prepare("INSERT INTO attributes (attributes_name, attributes_value, user_id)
                                          VALUES (:attributesname, :attributesvalue, :userId)");
      $sql->execute($attrData);
    }

    public function getAttributes($userId)
    {
      $sql = $this->pdo->prepare("SELECT u.id, a.attributes_name, a.attributes_value
                         FROM users AS u JOIN attributes AS a ON u.id = a.user_id WHERE u.id = :id");
      $sql->bindParam(':id', $userId);
      $sql->execute();

      return $sql->fetchAll();
    }
  }

























//
