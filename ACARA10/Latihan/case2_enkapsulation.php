<?php
// The parent class
class Car {
    // The $model property is private, this it can be accessed
    // only from inside the class
    private $model;

    // Public setter method
    public function setModel($model)
    {
        $this -> model = $model;
    }
    // Protected getter method to access the model property
    protected function getModel() {
        return $this->model;
    }
}
    // The child class inherits the code from the parent class
class SportsCar extends Car{
    public function hello()
    {
        return "beep! I am ".$this->getModel()."\n";
    }
}
// Create an instance from the child class
$sportsCar1 = new SportsCar();
// Set the value of the class property using the setter method from the parent class
$sportsCar1 ->setModel("Mercedes Benz");
// Use another method that the child class inherited from the parent class
echo $sportsCar1 ->hello();
?>