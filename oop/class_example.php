<?php
require 'animal_class.php';
require 'cow_class.php';
require 'lion_class.php';
$cow  = new Cow('Herbivore', 'Grass');
$lion = new Lion('Canirval', 'Meat');
echo '<b>Cow Object</b> <br>';
echo 'The Cow belongs to the ' . $cow->get_family() . ' family and eats ' . $cow->get_food() . '<br><br>';
echo '<b>Lion Object</b> <br>';
echo 'The Lion belongs to the ' . $lion->get_family() . ' family and eats ' . $lion->get_food();
?>