<?php 

/*require_once("../controllers/Employed.php");
require_once("../controllers/Client.php");
require_once("../controllers/Person.php");*/
//require_once("../models/Person.php");

require_once("../autoload.php"); //When you require the "autoload" in the class where you are instantiating the objects is unnecessary
								 //to require the "autoload" in the daughter classes.

use controllers\Employed;
use controllers\Client;
use controllers\Person;
//use models\Person;

$employed1 = new Employed("4253", "Dergo", 26);
$employed1 -> setJob("Barbecues programmer");

echo $employed1->getInfo();
echo "Job: " . $employed1->getJob();

$client1 = new Client("9885", "Don Hetor", 99);
$client1 -> setCredit(20000);

echo $client1->getInfo();
echo "Credit: " . $client1->getCredit();

echo "<br><br>";

$message = new Person();
echo $message->greet();

echo "<br><br>";

//$person1 = new Person("hue123", "Dildardo", 96);
//echo $person1->getInfo();

//On the double bar commented lines... I can't instantiate if supposedly i can when i have define the namespaces before.


 ?>