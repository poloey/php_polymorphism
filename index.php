<?php

interface Processor {
  public function process (Food $food);
}

class Make implements Processor {
  public function process (Food $food) {
    return $food->name . ' making completed <br>';
  }
}

class Serve implements Processor  {
  public function process (Food $food) {
    return $food->name . ' serving completed <br>';
  }
}

class Trash implements Processor {
  public function process (Food $food) {
    return $food->name . ' Trashing completed <br>';
  }
}


class Food {
  public $name;
  public function  __construct ($name) {
    $this->name = $name;
  }
  public function process (Processor $processor)  {
    return $processor->process ($this);
  }
}


$pizza = new Food('pizza');
$make =  new Make (pizza);
$serve =  new Serve (pizza);
$trash =  new Trash (pizza);
echo $pizza->process($make);
echo $pizza->process($serve);
echo $pizza->process($trash);
