<?php

class Human {
    
    private $name = '';
    private $age = 0;
    private $year_of_birth = 0;

    function __construct(string $name, int $year_of_birth) {
    $this->name = $name;
    $this->year_of_birth = $year_of_birth;
    $this->age = date('Y') - $year_of_birth;
}

    function greeting() {
    echo "Hello my name is $this->name! I am $this->age years old!<br>";
    }


    function __get(string $attribute_name) {
        return $this->$attribute_name;
    }


    function __set(string$attribute_name, $value) {
        if ($attribute_name == 'age' &&
        $value != date('Y') - $this->year_of_birth)
        {
            echo "I am not $value<br>";
            echo "I am actually $this->age<br>";
        } else {
            $this->$attribute_name = $value;
        }

    }


}


$person1 = new Human('Joe', 1978);
echo $person1->age;
$person1->age = 50;
var_dump($person1);










?>