<?php

require("Character.php");
require("Archer.php");


$hero = new Character("Merlin", "brouhhh");
$vilain = new Character("orc", "hagrougrou");
$archer = new Archer("Robin", "Pour le roi", 80);
//$hero->name = "Merlin";

echo $vilain->vie . "<br>";

$archer->rangeAttak($vilain);

echo $vilain->vie . "<br>";