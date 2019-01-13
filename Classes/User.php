<?php


class User {

  protected $name;
  protected $id;
  public $email;
  protected $password;
  protected $query;

  public function __construct()
  {
    $this->query = new QueryBuilder();
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    return $this->name = $name;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    return $this->email = $email;
  }

  public function setPassword($password)
  {
    return $this->password = $password;
  }

  public function getId()
  {
    return $this->id;
  }

  public function save()
  {
    $data = [
      'name' => $this->name,
      'email' => $this->email,
      'password' => $this->password
    ];
    $this->query->save($data);
  }

}
