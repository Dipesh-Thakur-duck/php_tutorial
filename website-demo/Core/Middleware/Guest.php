<?php

namespace Core\Middleware;

class Guest{
  public function handle(){
    // If a user is logged in, redirect them away from guest-only pages
    if(($_SESSION['user'] ?? false)){
      header('Location: /');
      exit();
    }
  }
}