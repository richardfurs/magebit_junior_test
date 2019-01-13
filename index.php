<?php

require 'vendor/autoload.php';


Router::load('routes.php')
  ->direct(Request::uri(), Request::method());


function view($name, $data = [])
{
  extract($data);

  return require "views/{$name}.view.php";
}
