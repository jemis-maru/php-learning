<?php

// Step 1: Create interface
interface Car
{
  public function drive();
}

// Step 2: Create concrete classes
class BMW implements Car
{
  public function drive()
  {
    echo "Driving a BMW 🚘";
  }
}

class Audi implements Car
{
  public function drive()
  {
    echo "Driving an Audi 🚗";
  }
}

// Step 3: Create Factory
class CarFactory
{
  public static function make(string $type): Car
  {
    return match ($type) {
      'bmw' => new BMW(),
      'audi' => new Audi(),
      default => throw new Exception("Car type not found"),
    };
  }
}

// Step 4: Use the factory
$car1 = CarFactory::make('bmw');
$car1->drive(); // Driving a BMW 🚘

$car2 = CarFactory::make('audi');
$car2->drive(); // Driving an Audi 🚗
