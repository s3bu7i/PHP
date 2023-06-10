<?php
//OOP (Object-Oriented Programming):
//Bir "Person" adlı sınıf yaradın və ad, soyad və yaş atributlarını daxil edin. Bu sınıfın adını, soyadını və yaşını göstərən metodlarını yazın.
//Bir "Circle" adlı sınıf yaradın və yarıçap atributunu daxil edin. Bu sınıfın sahəsini və çərəznin uzunluğunu hesablayan metodlarını yazın.

class Person {
    private $firstName;
    private $lastName;
    private $age;

    public function __construct($firstName, $lastName, $age){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
    return $this->lastName;
    }
    public function getAge(){
    return $this->age;
    }
}

class Circle {
  private $radius;

  // Constructor metodu
  public function __construct($radius) {
    $this->radius = $radius;
  }

  // Sahəni hesablayan metodu
  public function calculateArea() {
    return pi() * pow($this->radius, 2);
  }

  // Çərəz uzunluğunu hesablayan metodu
  public function calculateCircumference() {
    return 2 * pi() * $this->radius;
  }
}

// Person örneği yaratma
$person = new Person("John", "Doe", 30);

// Adı, soyadı ve yaşını gösterme
echo "Ad: " . $person->getFirstName() . "<br>";
echo "Soyad: " . $person->getLastName() . "<br>";
echo "Yaş: " . $person->getAge() . "<br>";

// Circle örneği yaratma
$circle = new Circle(5);

// Sahəni ve çərəz uzunluğunu hesaplama
echo "Sahə: " . $circle->calculateArea() . "<br>";
echo "Çərəz Uzunluğu: " . $circle->calculateCircumference();
?>