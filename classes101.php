<?php

class Person{
  public $name;
  public $age;

  public function greet(){
    return "Hello, my name is {$this->name} and I am {$this->age} years old.";
  }
}

$person1 = new Person();
$person1->name = 'Dipesh';
$person1->age = 21;
echo $person1->greet();