<?php
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">";
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

/* Math */
$blueCost = 2;
$redCost = 3;
$greenCost = 2;
$yellowCost = 1;
/* Subtotals */
$blueSubTotal = $blue * $blueCost;
$redSubTotal = $red * $redCost;
$greenSubTotal = $green * $greenCost;
$yellowSubTotal = $yellow * $yellowCost;
/* Shipping */
$shippingCost = 0;
if($shipping == "overnight") {
  $shipping = "Overnight";
  $shippingCost = 40;
} elseif ($shipping == "two") {
  $shipping = "Two Days";
  $shippingCost = 20;
} else {
  $shipping = "Free Shipping";
  $shippingCost = 0;
}
/* Total */
$totalCost = $blueSubTotal + $redSubTotal + $greenSubTotal + $yellowSubTotal + $shippingCost;

echo "<h2>Welcome " . $name . " to the Block Plaza!</h2><br>";
echo "You do know that " . $password . " isn't a good password, right?<br><br>";

echo "Here is your receipt!<br><br>";

echo "<table><tr>
      <td> </td>
      <td class=\"desc\"><b>Quantity</b></td>
      <td class=\"desc\"><b>Cost Per Item</b></td>
      <td class=\"desc\"><b>Sub Total</b></td>
      </tr>";
echo "<tr>
      <td class=\"desc\"><b>Blue</b></td>
      <td>" . $blue . "</td>
      <td>" . $blueCost . "</td>
      <td>" . $blueSubTotal . "</td>
      </tr>";
echo "<tr>
      <td class=\"desc\"><b>Red</b></td>
      <td>" . $red . "</td>
      <td>" . $redCost . "</td>
      <td>" . $redSubTotal . "</td>
      </tr>";
echo "<tr>
      <td class=\"desc\"><b>Green</b></td>
      <td>" . $green . "</td>
      <td>" . $greenCost . "</td>
      <td>" . $greenSubTotal . "</td>
      </tr>";
echo "<tr>
      <td class=\"desc\"><b>Yellow</b></td>
      <td>" . $yellow . "</td>
      <td>" . $yellowCost . "</td>
      <td>" . $yellowSubTotal . "</td>
      </tr>";
echo "<tr>
      <td class=\"desc\"><b>Shipping</b></td>
      <td colspan=\"2\">" . $shipping . "</td>
      <td>" . $shippingCost . "</td>
      </tr>";
echo "<tr>
      <td class=\"desc\" colspan=\"3\"><b>Total Cost</b></td>
      <td class=\"desc\">" . $totalCost . "</td>
      </tr></table>";
echo "<br><h3>Thank you for your purchase, have a great day!</h3><br>";
?>
