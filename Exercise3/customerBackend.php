<?php
/* Variables */
$name = $_POST["user"];
$password = $_POST["password"];
/* Box Numbers */
$blue = $_POST["blue"];
$red = $_POST["red"];
$green = $_POST["green"];
$yellow = $_POST["yellow"];
/* Shipping */
$shipping = $_POST["shipping"];

echo "Welcome " . $name . " to the Block Plaza!<br>";
echo "You do know that " . $password . " isn't a good password, right?<br>";

echo "You want " . $blue . " blue boxes.<br>";
echo "You want " . $red . " red boxes.<br>";
echo "You want " . $green . " green boxes.<br>";
echo "You want " . $yellow . " yellow boxes.<br>";

echo "All with " . $shipping . " shipping.<br>";

?>
