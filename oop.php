<?php
  class Person {
    private $name;
    private $age;

    public function __construct($name,$age){
      $this->name = $name;
      $this->age = $age;
      echo __CLASS__.' created'."<br>";
    }

    public function __destruct(){
      echo __CLASS__.' destroyed'."<br>";
    }



    // public function setName($name){
    //   $this->name = $name;
    // }
    // public function setAge($age){
    //   $this->age = $age;
    // }
    public function getName(){
       return $this->name;
    }
    public function getAge(){
       return $this->age;
    }
  }
  $person1 = new Person("Harri",32);
  // $person1->name = "Shafeeq";
  // $person1->setName("Harri");
  // $person1->setAge(32);
  echo $person1->getName()."<br>";
  echo $person1->getAge()."<br>";

  class Customers extends Person {
    private $balance;
    public function __construct($name,$age,$balance){
      parent::__construct($name,$age);
      $this->setBalance($balance);
    }
    public function setBalance($balance){
      $this->balance = $balance;
    }
    public function getBalance(){
      return $this->balance;
    }
    public function getData(){
      echo $this->getName()." , ".$this->getAge()." , ".$this->getBalance()."<br>";
  }
}
  $customer = new Customers("harri",56,"good");
  echo $customer->getName()."<br>";
  echo $customer->getAge()."<br>";
  $customer->getData();

?>
