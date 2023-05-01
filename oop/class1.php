<?php

// Создаем класс "Car"
class Car {
    // Свойства класса
    public $color;
    public $brand;

    // Методы класса

    // Конструктор для установки начальных значений свойств
    public function __construct($color, $brand) {
        $this->color = $color;
        $this->brand = $brand;
    }

    // Метод для вывода информации о машине
    public function getInfo() {
        return "Автомобиль марки " . $this->brand . ", цвет " . $this->color;
    }
}

// Создаем объекты на основе класса "Car"
$car1 = new Car("красный", "Toyota");
$car2 = new Car("синий", "BMW");

// Выводим информацию об объектах
echo $car1->getInfo(); // Выводит: "Автомобиль марки Toyota, цвет красный"
echo $car2->getInfo(); // Выводит: "Автомобиль марки BMW, цвет синий"

