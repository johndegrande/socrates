<?php

require_once('autoload.php');

$cat = new Cat();
echo "Cat Test: ".$cat->move()."<br>";

$bug = new Bug();
echo "Bug Test: ".$bug->move()."<br>";
$bug->leg_number = 5;
echo "Bug with a missing leg Test: ".$bug->move()."<br>";

$bird = new Bird();
echo "Bird Test (not flying): ".$bird->move()."<br>";

$bird = new Bird(1);
echo "Bird Test (flying): ".$bird->move()."<br>";

?>