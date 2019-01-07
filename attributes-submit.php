<?php

require 'bootstrap.php';

session_start();
$user = $_SESSION['user'];

$attrData = [
  'attributesname' => $_POST['attributes-name'],
  'attributesvalue' => $_POST['attributes-value'],
  'userId' => $user->getId()
];

$query->addAttributes($attrData);

header('Location: views/welcome.view.php');






























//
