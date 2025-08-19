<?php
$basePath = '/laravel-training/intermediate/mvc-architecture';

$uri = str_replace($basePath, '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($uri === '/' || $uri === '/home') {
  require 'controllers/HomeController.php';
  $controller = new HomeController();
  $controller->index();
} else {
  echo "404 - Not Found";
}
