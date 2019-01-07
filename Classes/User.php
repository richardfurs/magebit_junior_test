<?php


class User {

  protected $name;
  protected $id;
  protected $query;

  public function __construct()
  {
    $this->query = dirname(__DIR__) . '\bootstrap.php';
  }

  public function getName()
  {
    return $this->name;
  }

  public function getId()
  {
    return $this->id;
  }

}
