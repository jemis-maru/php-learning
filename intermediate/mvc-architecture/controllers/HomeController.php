<?php
require_once 'models/User.php';

class HomeController
{
  public function index()
  {
    $userModel = new User();
    $users = $userModel->getAllUsers();

    // Pass data to view
    require 'views/home.php';
  }
}
