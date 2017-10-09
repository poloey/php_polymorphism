<?php

class Students {
  public $name;
  public $email;
  public $location;
  public function __construct ($name, $email, $location) {
    $this->name = $name;
    $this->email = $email;
    $this->location = $location;
  }
  public function about () {
    return "Hello my name is {$this->name}. I live in {$this->location}. In order to contact with me send me a email. My email address is {$this->email}";
  }
}

$israt = new Students('Israt Islam', 'israt@gmail.com', 'Feni');
$amena = new Students('Amena Ahmed', 'amena@gmail.com', 'Feni');
$kayes = new Students('Kayes', 'kayes@gmail.com', 'Feni');
$hayder = new Students('Hayder', 'hayder@gmail.com', 'Feni');
print_r($israt);
print_r($amena);
print_r($kayes);
print_r($hayder);


