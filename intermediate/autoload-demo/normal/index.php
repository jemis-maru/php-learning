<?php

function myAutoloader($class)
{
  include "classes/" . $class . ".php";
}

spl_autoload_register("myAutoloader");

// Instantiate classes without requiring files manually
$user = new User();
$product = new Product();
