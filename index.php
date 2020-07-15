<?php 

require('Character.php');

$hero = new Character("Gandalf", "vous ne passerez pas !!!");
$vilain = new Character("Orque", "wargh");
//$hero->$name = "Gandalf";
var_dump($hero, $vilain);