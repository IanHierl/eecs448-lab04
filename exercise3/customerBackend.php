<?php
$price1 = 3;
$price2 = 5;
$price3 = 10;
$totalCost = 0;
?>
<!doctype html>

<html lang="en">
  <head>
    <title>Exercise 3 - Customer Backend</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
<?php
echo "    <div class=\"welcome\">\n";
echo "      <h1>Welcome, {$_POST["username"]}!</h1><br>\n";
echo "      Logged in with password: {$_POST["password"]}.\n";
echo "    </div>\n";
?>
    <h2>Sales Receipt:</h2>
    <table id="receipt">
      <tr>
        <th></th>
        <th>Quantity</th>
        <th>Per Item Cost</th>
        <th>Sub Total</th>
      </tr>
<?php
$quant1 = intval($_POST["item1"]);
$cost1 = $quant1 * $price1;
$totalCost += $cost1;
echo "      <tr>\n";
echo "        <td>Item 1</td>\n";
echo "        <td> {$_POST["item1"]} </td>\n";
echo "        <td>\$$price1</td>\n";
echo "        <td>\$$cost1</td>\n";
echo "      </tr>\n";

$quant2 = intval($_POST["item2"]);
$cost2 = $quant2 * $price2;
$totalCost += $cost2;
echo "      <tr>\n";
echo "        <td>Item 2</td>\n";
echo "        <td> {$_POST["item2"]} </td>\n";
echo "        <td>\$$price2</td>\n";
echo "        <td>\$$cost2</td>\n";
echo "      </tr>\n";

$quant3 = intval($_POST["item3"]);
$cost3 = $quant3 * $price3;
$totalCost += $cost3;
echo "      <tr>\n";
echo "        <td>Item 3</td>\n";
echo "        <td> {$_POST["item3"]} </td>\n";
echo "        <td>\$$price3</td>\n";
echo "        <td>\$$cost3</td>\n";
echo "      </tr>\n";
?>
      <tr>
        <td>Shipping</td>
<?php
switch($_POST["shipping"]) {
  case "7day":
    echo "        <td colspan=2>7-Day Shipping</td>\n";
    echo "        <td>Free</td>\n";
    break;
  case "3day":
    echo "        <td colspan=2>3-Day Shipping</td>\n";
    echo "        <td>$5</td>\n";
    $totalCost += 5;
    break;
  case "overnight":
    echo "        <td colspan=2>Overnight Shipping</td>\n";
    echo "        <td>$50</td>\n";
    $totalCost += 50;
    break;
}
?>
      </tr>
      <tr>
        <td colspan=3>Total Cost</td>
        <td>$<?php echo $totalCost; ?></td>
      </tr>
    </table>
  </body>
</html>
