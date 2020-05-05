<?php 

require_once ("ClassUsuario.php");

//Here, i accessed to a atribute of the principal class without instantiate it
//echo Usuario::$state;

$obj1 = new User("Diego", "diego@hue.com", "Admin");
echo $obj1->name;
echo $obj1->getName();

//Static propierties doesn't belongs to the object but to the class, on this way
//we can access to them propierties without instantiate an object

echo User::$state;

echo "<br>";

echo $obj1->getInfo();



 ?>