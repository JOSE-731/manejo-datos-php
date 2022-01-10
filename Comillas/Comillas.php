<?php


//Comillas simples

//Ejemplo 1
echo 'Un texto de una línea';

$name = 'Jose';
echo "mi nombre es : " .$name . "<br>";

//Ejemplo 2
$cursos = [
    'backend' => [
        'php',
        'node',
    ]
];


echo "{$cursos['backend'][0]}";

//Ejemplo 3
class User {

  public  $lastname = 'diaz';

}

$User = new User;

echo $User->lastname;

//Ejemplo 3
$cargo = 'programador';
$programador = 'Diaz';

echo "$cargo es ${programador}";