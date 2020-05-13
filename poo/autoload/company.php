<?php 

//require_once("ClassEmployed.php");
//require_once("ClassClient.php");
require_once("autoload.php");

$employed1 = new Employed("4253", "Dergo", 26);
$employed1 -> setJob("Barbecues programmer");

echo $employed1->getInfo();
echo "Job: " . $employed1->getJob();

$client1 = new Client("9885", "Don Hetor", 99);
$client1 -> setCredit(20000);

echo $client1->getInfo();
echo "Credit: " . $client1->getCredit();

 ?>