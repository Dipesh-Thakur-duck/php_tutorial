<?php

namespace Core\Middleware;

class Auth{
  public function handle(){
    // If no user is logged in, redirect to home (or login)
    if(! ($_SESSION['user'] ?? false)){
      header('Location: /');
      exit();
    }
  }
}