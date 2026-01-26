<?php

// craição de variaveis
/*
    Tipos de variaveis me PHP:
    - String
    - Numbers -> Integers e Float(Double)
    - Boolean
    - Arrays
    - Objects
    - NULL
*/

//string
echo gettype("Isso é uma string");
echo "\n";

// number
echo gettype(1234);
echo "\n";
echo gettype(12.34);
echo "\n";

// boolean
echo gettype(true);
echo "\n";

// array
echo gettype(array("valor1", "valor2", "valor3"));
echo "\n";

// object
class Car{
    public $color;
    public $model;

    public function Construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
}
echo gettype(new Car("white", "FastBack"));

echo "\n";

// null
$var = null;
echo gettype($var);
echo "\n";

/*
    Para criação de variaveis em PHP, utilizamos o cifrão ($) seguido do nome da variavel.
    Exemplo: $minhaVariavel = "valor";
*/

$myName = "Marcelo";
echo "Meu nome é " . $myName;